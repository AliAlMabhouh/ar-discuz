<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<?php if($a == 'ls') { ?>

	<script src="js/common.js" type="text/javascript"></script>
	<script src="js/calendar.js" type="text/javascript"></script>
	<script type="text/javascript">
		function switchbtn(btn) {
			$('addadmindiv').className = btn == 'addadmin' ? 'tabcontentcur' : '' ;
			$('editpwdiv').className = btn == 'addadmin' ? '' : 'tabcontentcur';

			$('addadmin').className = btn == 'addadmin' ? 'tabcurrent' : '';
			$('editpw').className = btn == 'addadmin' ? '' : 'tabcurrent';

			$('addadmindiv').style.display = btn == 'addadmin' ? '' : 'none';
			$('editpwdiv').style.display = btn == 'addadmin' ? 'none' : '';
		}
		function chkeditpw(theform) {
			if(theform.oldpw.value == '') {
				alert('الرجاء قم بإدخال كلمة المرور القديمة');
				theform.oldpw.focus();
				return false;
			}
			if(theform.newpw.value == '') {
				alert('الرجاء قم بإدخال كلمة المرور الجديدة');
				theform.newpw.focus();
				return false;
			}
			if(theform.newpw2.value == '') {
				alert('الرجاء قم بإدخال كلمة المرور الجديدة مرة أخرى');
				theform.newpw2.focus();
				return false;
			}
			if(theform.newpw.value != theform.newpw2.value) {
				alert('كلمتا المرور غير متطابقتين');
				theform.newpw2.focus();
				return false;
			}
			if(theform.newpw.value.length < 6 && !confirm('كلمة المرور قصيرة جداً, هل تريد التأكيد ?')) {
				theform.newpw.focus();
				return false;
			}
			return true;
		}
	</script>

	<div class="container">
		<?php if($status) { ?>
			<div class="<?php if($status > 0) { ?>correctmsg<?php } else { ?>errormsg<?php } ?>">
				<p>
				<?php if($status == 1) { ?> <?php echo $addname;?> تم اضافته بنجاح كمدير
				<?php } elseif($status == -1) { ?> <?php echo $addname;?> تم اضافته بنجاح كمدير
				<?php } elseif($status == -2) { ?> اضافة <?php echo $addname;?> كمدير فشل
				<?php } elseif($status == -3) { ?>العضو: <?php echo $addname;?> غير موجود
				<?php } elseif($status == -4) { ?> /data/config.inc.php لا يمكن الكتابة عليه
				<?php } elseif($status == -5) { ?> خطأ في كلمة مرور المدير
				<?php } elseif($status == -6) { ?> كلمتا المرور غير متطابقتين
				<?php } elseif($status == 2) { ?> تم تعديل كلمة مرور المدير بنجاح
				<?php } ?>
				</p>
			</div>
		<?php } ?>
		<div class="hastabmenu" style="height:218px;">
			<ul class="tabmenu">
				<li id="addadmin" class="tabcurrent"><a href="#" onclick="switchbtn('addadmin');">اضافة كمدير</a></li>
				<?php if($user['isfounder']) { ?><li id="editpw"><a href="#" onclick="switchbtn('editpw');">تعديل كلمة مرور المدير</a></li><?php } ?>
			</ul>
			<div id="addadmindiv" class="tabcontentcur">
				<form action="admin.php?m=admin&a=ls" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="dbtb">
					<tr>
						<td class="tbtitle">اسم المستخدم:</td>
						<td><input type="text" name="addname" class="txt" /></td>
					</tr>
					<tr>
						<td valign="top" class="tbtitle">الصلاحيات:</td>
						<td>
							<ul class="dblist">
								<li><input type="checkbox" name="allowadminsetting" value="1" class="checkbox" checked="checked" />تعديل الاعدادات</li>
								<li><input type="checkbox" name="allowadminapp" value="1" class="checkbox" />ادارة التطبيقات</li>
								<li><input type="checkbox" name="allowadminuser" value="1" class="checkbox" />ادارة الاعضاء</li>
								<li><input type="checkbox" name="allowadminbadword" value="1" class="checkbox" checked="checked" />ادارة الكلمات السيئة</li>
								<li><input type="checkbox" name="allowadmintag" value="1" class="checkbox" checked="checked" />ادارة العلامات</li>
								<li><input type="checkbox" name="allowadminpm" value="1" class="checkbox" checked="checked" />ادارة الرسائل</li>
								<li><input type="checkbox" name="allowadmincredits" value="1" class="checkbox" checked="checked" />ادارة النقاط</li>
								<li><input type="checkbox" name="allowadmindomain" value="1" class="checkbox" checked="checked" />ادارة النطاقات</li>
								<li><input type="checkbox" name="allowadmindb" value="1" class="checkbox" />ادارة قاعدة البيانات</li>
								<li><input type="checkbox" name="allowadminnote" value="1" class="checkbox" checked="checked" />ادارة البيانات (الملاحظات) </li>
								<li><input type="checkbox" name="allowadmincache" value="1" class="checkbox" checked="checked" />ادارة الذاكرة المؤقت</li>
								<li><input type="checkbox" name="allowadminlog" value="1" class="checkbox" checked="checked" />عرض السجلات</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="addadmin" value="موافق" class="btn" />
						</td>
					</tr>
				</table>
				</form>
			</div>
			<?php if($user['isfounder']) { ?>
			<div id="editpwdiv" class="tabcontent" style="display:none;">
				<p class="i">{ admin_editfoundertips }</p>
				<form action="admin.php?m=admin&a=ls" onsubmit="return chkeditpw(this)" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="dbtb" style="height:123px;">
					<tr>
						<td class="tbtitle">كلمة المرور القديمة:</td>
						<td><input type="password" name="oldpw" class="txt" /></td>
					</tr>
					<tr>
						<td class="tbtitle">كلمة المرور الجديدة:</td>
						<td><input type="password" name="newpw" class="txt" /></td>
					</tr>
					<tr>
						<td class="tbtitle">اعد كلمة المرور الجديدة:</td>
						<td><input type="password" name="newpw2" class="txt" /></td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="editpwsubmit" value="موافق" class="btn" />
						</td>
					</tr>
				</table>
				</form>
			</div>
			<?php } ?>
		</div>
		<h3>قائمة المدراء</h3>
		<div class="mainbox">
			<?php if($userlist) { ?>
				<form action="admin.php?m=admin&a=ls" onsubmit="return confirm('هل أنت متأكد من الحذف?');" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" value="1" class="checkbox" /><label for="chkall">حذف</label></th>
						<th>اسم المستخدم</th>
						<th>البريد الالكتروني</th>
						<th>تاريخ التسجيل</th>
						<th>اي بي التسجيل</th>
						<th>الملف الشخصي</th>
						<th>الصلاحيات</th>
					</tr>
					<?php foreach((array)$userlist as $user) {?>
						<tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $user['uid'];?>" value="1" class="checkbox" /></td>
							<td class="username"><?php echo $user['username'];?></td>
							<td><?php echo $user['email'];?></td>
							<td class="date"><?php echo $user['regdate'];?></td>
							<td class="ip"><?php echo $user['regip'];?></td>
							<td class="ip"><a href="admin.php?m=user&a=edit&uid=<?php echo $user['uid'];?>&fromadmin=yes">الملف الشخصي</a></td>
							<td class="ip"><a href="admin.php?m=admin&a=edit&uid=<?php echo $user['uid'];?>">الصلاحيات</a></td>
						</tr>
					<?php } ?>
					<tr class="nobg">
						<td><input type="submit" value="موافق" class="btn" /></td>
						<td class="tdpage" colspan="4"><?php echo $multipage;?></td>
					</tr>
				</table>
				</form>
			<?php } else { ?>
				<div class="note">
					<p class="i">لا يوجد سجلات!</p>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php if($_POST['editpwsubmit']) { ?>
		<script type="text/javascript">
		switchbtn('editpw');
		</script>
	<?php } else { ?>
		<script type="text/javascript">
		switchbtn('addadmin');
		</script>
	<?php } ?>

<?php } else { ?>
	<div class="container">
		<h3 class="marginbot">تعديل صلاحيات المدير<a href="admin.php?m=admin&a=ls" class="sgbtn">رجوع الى قائمة المدراء</a></h3>
		<?php if($status == 1) { ?>
			<div class="correctmsg"><p>تم تعديلا صلاحيات المدير بنجاح</p></div>
		<?php } elseif($status == -1) { ?>
			<div class="correctmsg"><p>فشل تعديل صلاحيات المدير</p></div>
		<?php } else { ?>
			<div class="note">الرجاء تفعيل "ادارة التطبيقات", "ادارة الاعضاء", "ادارة قاعدة البيانات" بحذر </div>
		<?php } ?>
		<div class="mainbox">
			<form action="admin.php?m=admin&a=edit&uid=<?php echo $uid;?>" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="opt">
					<tr>
						<th>المدير <?php echo $admin['username'];?>:</th>
					</tr>
					<tr>
						<td>
							<ul>
								<li><input type="checkbox" name="allowadminsetting" value="1" class="checkbox" <?php if($admin['allowadminsetting']) { ?> checked="checked" <?php } ?>/>تعديل الاعدادات</li>
								<li><input type="checkbox" name="allowadminapp" value="1" class="checkbox" <?php if($admin['allowadminapp']) { ?> checked="checked" <?php } ?>/>ادارة التطبيقات</li>
								<li><input type="checkbox" name="allowadminuser" value="1" class="checkbox" <?php if($admin['allowadminuser']) { ?> checked="checked" <?php } ?>/>ادارة الاعضاء</li>
								<li><input type="checkbox" name="allowadminbadword" value="1" class="checkbox" <?php if($admin['allowadminbadword']) { ?> checked="checked" <?php } ?>/>ادارة الكلمات السيئة</li>
								<li><input type="checkbox" name="allowadmintag" value="1" class="checkbox" <?php if($admin['allowadmintag']) { ?> checked="checked" <?php } ?>/>ادارة العلامات</li>
								<li><input type="checkbox" name="allowadminpm" value="1" class="checkbox" <?php if($admin['allowadminpm']) { ?> checked="checked" <?php } ?>/>ادارة الرسائل</li>
								<li><input type="checkbox" name="allowadmincredits" value="1" class="checkbox" <?php if($admin['allowadmincredits']) { ?> checked="checked" <?php } ?>/>ادارة النقاط</li>
								<li><input type="checkbox" name="allowadmindomain" value="1" class="checkbox" <?php if($admin['allowadmindomain']) { ?> checked="checked" <?php } ?>/>ادارة النطاقات</li>
								<li><input type="checkbox" name="allowadmindb" value="1" class="checkbox" <?php if($admin['allowadmindb']) { ?> checked="checked" <?php } ?>/>ادارة قاعدة البيانات</li>
								<li><input type="checkbox" name="allowadminnote" value="1" class="checkbox" <?php if($admin['allowadminnote']) { ?> checked="checked" <?php } ?>/>ادارة البيانات (الملاحظات) </li>
								<li><input type="checkbox" name="allowadmincache" value="1" class="checkbox" <?php if($admin['allowadmincache']) { ?> checked="checked" <?php } ?>/>ادارة الذاكرة المؤقت</li>
								<li><input type="checkbox" name="allowadminlog" value="1" class="checkbox" <?php if($admin['allowadminlog']) { ?> checked="checked" <?php } ?>/>عرض السجلات</li>
							</ul>
						</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" موافق " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>

<?php } ?>

<?php include $this->gettpl('footer');?>