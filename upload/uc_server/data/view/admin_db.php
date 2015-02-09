<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>

<div class="container">
	<?php if($operate == 'list') { ?>
		<h3 class="marginbot">
			<a href="admin.php?m=db&a=ls&o=export" class="sgbtn">نسخة احتياطية</a>
			قائمة الاستعادة
		</h3>
		<div class="note fixwidthdec">
			<p class="i">يمكنك الضغطك على "التفاصيل" لاستعادة قاعدة البيانات</p>
		</div>
		<div class="mainbox">
			<form id="theform">
				<table class="datalist" onmouseover="addMouseEvent(this);">
					<tr>
						<th nowrap="nowrap"><input type="checkbox" name="chkall" id="chkall" onclick="checkall('operate[]')" class="checkbox" /><label for="chkall">حذف</label></th>
						<th nowrap="nowrap">مجلد النسخة الاحتياطية</th>
						<th nowrap="nowrap">تاريخ النسخة الاحتياطية</th>
						<th nowrap="nowrap">الإجراء</th>
						<th nowrap="nowrap">&nbsp;</th>
						<th nowrap="nowrap">&nbsp;</th>
					</tr>
					<?php foreach((array)$baklist as $bak) {?>
						<tr>
							<td width="50"><input type="checkbox" name="operate[]" value="<?php echo $bak['name'];?>" class="checkbox" /></td>
							<td width="200"><a href="admin.php?m=db&a=ls&o=view&dir=<?php echo $bak['name'];?>"><?php echo $bak['name'];?></a></td>
							<td width="120"><?php echo $bak['date'];?></td>
							<td><a href="admin.php?m=db&a=ls&o=view&dir=<?php echo $bak['name'];?>">تفاصيل قاعدة البيانات</a></td>
							<td id="db_operate_<?php echo $bak['name'];?>"></td>
							<td><iframe id="operate_iframe_<?php echo $bak['name'];?>" style="display:none" width="0" height="0"></iframe></td>
						</tr>
					<?php } ?>
					<tr class="nobg">
						<td colspan="6"><input type="button" value="موافق" onclick="db_delete($('theform'))" class="btn" /></td>
					</tr>
				</table>
			</form>
		</div>
	<?php } elseif($operate == 'view') { ?>
		<h3 class="marginbot">
			<a href="admin.php?m=db&a=ls&o=export" class="sgbtn">نسخة احتياطية</a>
			قائمة الاستعادة
		</h3>
		<div class="note fixwidthdec">
			<p class="i">حدد التطبيقات التي تريد استعادة البيانات لها, ثم اضغط على زر  "موافق" للبدء!</p>
		</div>
		<div class="mainbox">
			<form id="theform">
			<table class="datalist" onmouseover="addMouseEvent(this);">
				<tr>
					<th nowrap="nowrap"><input type="checkbox" name="chkall" id="chkall" onclick="checkall('operate[]')" class="checkbox" /><label for="chkall">استيراد</label></th>
					<th nowrap="nowrap">ID</th>
					<th nowrap="nowrap">اسم التطبيق</th>
					<th nowrap="nowrap">وصلة التطبيق</th>
					<th nowrap="nowrap">&nbsp;</th>
					<th nowrap="nowrap">&nbsp;</th>
				</tr>
				<tr>
					<td width="50"><input type="checkbox" name="operate_uc" class="checkbox" /></td>
					<td width="35"></td>
					<td><strong>UCenter</strong></td>
					<td></td>
					<td id="db_operate_0"><img src="images/correct.gif" border="0" class="statimg" /><span class="green">الملف موجود</span></td>
					<td><iframe id="operate_iframe_0" style="display:none" width="0" height="0"></iframe></td>
				</tr>
				<?php foreach((array)$applist as $app) {?>
					<tr>
						<td width="50"><input type="checkbox" name="operate[]" value="<?php echo $app['appid'];?>" class="checkbox" /></td>
						<td width="35"><?php echo $app['appid'];?></td>
						<td width="160"><a href="admin.php?m=app&a=detail&appid=<?php echo $app['appid'];?>"><strong><?php echo $app['name'];?></strong></a></td>
						<td><a href="<?php echo $app['url'];?>" target="_blank"><?php echo $app['url'];?></a></td>
						<td id="db_operate_<?php echo $app['appid'];?>"></td>
						<td><iframe id="operate_iframe_<?php echo $app['appid'];?>" src="admin.php?m=db&a=ls&o=ping&appid=<?php echo $app['appid'];?>&dir=<?php echo $dir;?>" style="display:none" width="0" height="0"></iframe></td>
					</tr>
				<?php } ?>
				<tr class="nobg">
					<td colspan="6"><input type="button" value="موافق" onclick="db_operate($('theform'), 'import')" class="btn" /></td>
				</tr>
			</table>
			</form>
		</div>
	<?php } else { ?>
		<h3 class="marginbot">
			نسخة احتياطية
			<a href="admin.php?m=db&a=ls&o=list" class="sgbtn">قائمة الاستعادة</a>
		</h3>
		<div class="mainbox">
			<form id="theform">
			<table class="datalist" onmouseover="addMouseEvent(this);">
				<tr>
					<th nowrap="nowrap"><input type="checkbox" name="chkall" id="chkall" checked="checked" onclick="checkall('operate[]')" class="checkbox" /><label for="chkall">نسخة احتياطية</label></th>
					<th nowrap="nowrap">ID</th>
					<th nowrap="nowrap">اسم التطبيق</th>
					<th nowrap="nowrap">وصلة التطبيق</th>
					<th nowrap="nowrap">&nbsp;</th>
					<th nowrap="nowrap">&nbsp;</th>
				</tr>
				<tr>
					<td width="50"><input type="checkbox" name="operate_uc" disabled="disabled" checked="checked" class="checkbox" /></td>
					<td width="35"></td>
					<td><strong>UCenter</strong></td>
					<td></td>
					<td id="db_operate_0"></td>
					<td><iframe id="operate_iframe_0" style="display:none" width="0" height="0"></iframe></td>
				</tr>
				<?php foreach((array)$applist as $app) {?>
					<tr>
						<td width="50"><input type="checkbox" name="operate[]" value="<?php echo $app['appid'];?>" checked="checked" class="checkbox" /></td>
						<td width="35"><?php echo $app['appid'];?></td>
						<td width="160"><a href="admin.php?m=app&a=detail&appid=<?php echo $app['appid'];?>"><strong><?php echo $app['name'];?></strong></a></td>
						<td><a href="<?php echo $app['url'];?>" target="_blank"><?php echo $app['url'];?></a></td>
						<td id="db_operate_<?php echo $app['appid'];?>"></td>
						<td><iframe id="operate_iframe_<?php echo $app['appid'];?>" style="display:none" width="0" height="0"></iframe></td>
					</tr>
				<?php } ?>
				<tr class="nobg">
					<td colspan="6"><input type="button" value="موافق" onclick="db_operate($('theform'), 'export')" class="btn" /></td>
				</tr>
			</table>
			</form>
		</div>
	<?php } ?>
</div>

<script type="text/javascript">
var import_status = new Array();
function db_delete(theform) {
	var lang_tips = 'بدء لحذف ملفات النسخة الاحتياطية, لا تغلق المتصفح...';
	if(!confirm('حذف ملفات النسخة الاحتياطية في  UCenter سوف يقوم بحذف جميع ملفات النسخ الاحتياطية لجميع التطبيقات, هل انت متأكد من الحذف?')) {
		return;
	}
	for(i = 0; theform[i] != null; i++) {
		ele = theform[i];
		if(/^operate\[/.test(ele.name) && ele.type == "checkbox" && ele.checked) {
			show_status(ele.value, lang_tips);
			$('operate_iframe_'+ele.value).src = 'admin.php?m=db&a=delete&backupdir='+ele.value;
		}
	}
}

function db_operate(theform, operate) {
	operate = operate == 'import' ? 'import' : 'export';
	if(operate == 'export') {
		var lang_tips = 'جاري بدء انشاء النسخة الاحتياطية للبيانات, الرجاء الانتظار و لا تغلق المتصفح...';
	} else {
		if(!confirm('سوف يتم الكتابة على البيانات الحلية مما سوف يؤدي الى فقدنها جميعا وتثبيت بيانات النسخة الاحتياطية جميعها, هل انت متأكد من الاستيراد والاستعادة?')) {
			return;
		}
		if(theform.operate_uc.checked && !confirm('سوف يتم الكتابة على البيانات الحلية مما سوف يؤدي الى فقدنها جميعا وتثبيت بيانات النسخة الاحتياطية جميعها, هل انت متأكد من الاستيراد والاستعادة?')) {
			return;
		}
		var lang_tips = 'جاري استيراد قاعدة البيانات,الرجاء لا تغلق المتصفح...';
	}

	if(theform.operate_uc.checked) {
		show_status(0, lang_tips);
		$('operate_iframe_0').src = 'admin.php?m=db&a=operate&t='+operate+'&appid=0&backupdir=<?php echo $dir;?>&sid=<?php echo $sid;?>';
	}
	for(i = 0; theform[i] != null; i++) {
		ele = theform[i];
		if(/^operate\[\]$/.test(ele.name) && ele.type == "checkbox" && ele.checked) {
			if(operate != 'import' || import_status[ele.value] != false) {
				show_status(ele.value, lang_tips);
				$('operate_iframe_'+ele.value).src = 'admin.php?m=db&a=operate&t='+operate+'&appid='+ele.value+'&backupdir=<?php echo $dir;?>&sid=<?php echo $sid;?>';
			}
		}
	}
}

function show_status(extid, msg) {
	var o = $('db_operate_'+extid);
	o.innerHTML = msg;
}
</script>

<?php include $this->gettpl('footer');?>