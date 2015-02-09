<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<script src="js/calendar.js" type="text/javascript"></script>

<?php if($a == 'ls') { ?>

	<script type="text/javascript">
		function switchbtn(btn) {
			$('srchuserdiv').style.display = btn == 'srch' ? '' : 'none';
			$('srchuserdiv').className = btn == 'srch' ? 'tabcontentcur' : '' ;
			$('srchuserbtn').className = btn == 'srch' ? 'tabcurrent' : '';
			$('adduserdiv').style.display = btn == 'srch' ? 'none' : '';
			$('adduserdiv').className = btn == 'srch' ? '' : 'tabcontentcur';
			$('adduserbtn').className = btn == 'srch' ? '' : 'tabcurrent';
		}
	</script>

	<div class="container">
		<?php if($status) { ?>
			<div class="<?php if($status > 0) { ?>correctmsg<?php } else { ?>errormsg<?php } ?>"><p><?php if($status < 0) { ?><em>فشل اضافة العضو:</em> <?php } ?><?php if($status == 2) { ?>تم حذف العضو/اء بنجاح<?php } elseif($status == 1) { ?>تمت اضافة العضو بنجاح.<?php } elseif($status == -1) { ?>اسم غير صالح<?php } elseif($status == -2) { ?>اسم المستخدم يحتوي على كلمات سيئة/محظورة<?php } elseif($status == -3) { ?>اسم المستخدم موجود مسبقاً<?php } elseif($status == -4) { ?>بريد غير صالح<?php } elseif($status == -5) { ?>غير مسموح التسجيل بهذا البريد<?php } elseif($status == -6) { ?>هذا البريد مسجل به مسبقاً<?php } ?></p></div>
		<?php } ?>
		<div class="hastabmenu">
			<ul class="tabmenu">
				<li id="srchuserbtn" class="tabcurrent"><a href="#" onclick="switchbtn('srch')">بحث عن عضو</a></li>
				<li id="adduserbtn"><a href="#" onclick="switchbtn('add')">اضافة عضو</a></li>
			</ul>
			<div id="adduserdiv" class="tabcontent" style="display:none;">
				<form action="admin.php?m=user&a=ls&adduser=yes" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table width="100%">
					<tr>
						<td>اسم المستخدم:</td>
						<td><input type="text" name="addname" class="txt" /></td>
						<td>كلمة المرور:</td>
						<td><input type="text" name="addpassword" class="txt" /></td>
						<td>البريد الالكتروني:</td>
						<td><input type="text" name="addemail" class="txt" /></td>
						<td><input type="submit" value="موافق"  class="btn" /></td>
					</tr>
				</table>
				</form>
			</div>
			<div id="srchuserdiv" class="tabcontentcur">
				<form action="admin.php?m=user&a=ls" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table width="100%">
					<tr>
						<td>اسم المستخدم:</td>
						<td><input type="text" name="srchname" value="<?php echo $srchname;?>" class="txt" /></td>
						<td>UID:</td>
						<td><input type="text" name="srchuid" value="<?php echo $srchuid;?>" class="txt" /></td>
						<td>البريد الالكتروني:</td>
						<td><input type="text" name="srchemail" value="<?php echo $srchemail;?>" class="txt" /></td>
						<td rowspan="2"><input type="submit" value="موافق" class="btn" /></td>
					</tr>
					<tr>
						<td>تاريخ التسجيل:</td>
<!--vot-->					<td><input type="text" name="srchregdatestart" onclick="showcalendar();" value="<?php echo $srchregdatestart;?>" class="txt" /></td>
<!--vot-->					<td> الى </td>
<!--vot-->					<td><input type="text" name="srchregdateend" onclick="showcalendar();" value="<?php echo $srchregdateend;?>" class="txt" /></td>
						<td>اي بي التسجيل:</td>
						<td><input type="text" name="srchregip" value="<?php echo $srchregip;?>" class="txt" /></td>
					</tr>
				</table>
				</form>
			</div>
		</div>

		<?php if($adduser) { ?><script type="text/javascript">switchbtn('add');</script><?php } ?>
<br />
		<h3>قائمة الاعضاء</h3>
		<div class="mainbox">
			<?php if($userlist) { ?>
				<form action="admin.php?m=user&a=ls&srchname=<?php echo $srchname;?>&srchregdate=<?php echo $srchregdate;?>" onsubmit="return confirm('لا يمكن التراجع عن هذه العملية,هل انت متأكد من حذف هؤلاء الاعضاء?');" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
					<tr>
						<th><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">حذف</label></th>
						<th>اسم المستخدم</th>
						<th>البريد الالكتروني</th>
						<th>تاريخ التسجيل</th>
						<th>اي بي التسجيل</th>
						<th>تعديل</th>
					</tr>
					<?php foreach((array)$userlist as $user) {?>
						<tr>
							<td class="option"><input type="checkbox" name="delete[]" value="<?php echo $user['uid'];?>" class="checkbox" /></td>
							<td><?php echo $user['smallavatar'];?> <strong><?php echo $user['username'];?></strong></td>
							<td><?php echo $user['email'];?></td>
							<td><?php echo $user['regdate'];?></td>
							<td><?php echo $user['regip'];?></td>
							<td><a href="admin.php?m=user&a=edit&uid=<?php echo $user['uid'];?>">تعديل</a></td>
						</tr>
					<?php } ?>
					<tr class="nobg">
						<td><input type="submit" value="موافق" class="btn" /></td>
						<td class="tdpage" colspan="6"><?php echo $multipage;?></td>
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

<?php } else { ?>

	<div class="container">
		<h3 class="marginbot">تعديل الملف الشخصي للعضو
			<?php if(getgpc('fromadmin')) { ?>
				<a href="admin.php?m=admin&a=ls" class="sgbtn">رجوع الى قائمة المدراء</a>
			<?php } else { ?>
				<a href="admin.php?m=user&a=ls" class="sgbtn">رجوع الى قائمة الاعضاء</a>
			<?php } ?>
		</h3>
		<?php if($status == 1) { ?>
			<div class="correctmsg"><p>تم تعديل الملف الشخصي للعضو بنجاح</p></div>
		<?php } elseif($status == -1) { ?>
			<div class="correctmsg"><p>فشل في تعديل الملف الشخصي للعضو</p></div>
		<?php } else { ?>
			<div class="note"><p class="i">اتركه فارغاً لاستخدام كلمة المرور القديمة.</p></div>
		<?php } ?>
		<div class="mainbox">
			<form action="admin.php?m=user&a=edit&uid=<?php echo $uid;?>" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="opt">
					<tr>
						<th>الصورة الرمزية: <input name="delavatar" class="checkbox" type="checkbox" value="1" /> حذف الصورة الرمزية</th>
					</tr>
					<tr>
						<th>الصورة الرمزية الظاهرية:</th>
					</tr>
					<tr>
						<td><?php echo $user['bigavatar'];?></td>
					</tr>
					<tr>
						<th>الصورة الرمزية الحقيقية:</th>
					</tr>
					<tr>
						<td><?php echo $user['bigavatarreal'];?></td>
					</tr>
					<tr>
						<th>اسم المستخدم:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="newusername" value="<?php echo $user['username'];?>" class="txt" />
							<input type="hidden" name="username" value="<?php echo $user['username'];?>" class="txt" />
						</td>
					</tr>
					<tr>
						<th>كلة المرور:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="password" value="" class="txt" />
						</td>
					</tr>
					<tr>
						<th>سؤال الامان: <input type="checkbox" class="checkbox" name="rmrecques" value="1" /> مسح اسئلة الامان</th>
					</tr>
					<tr>
						<th>Email:</th>
					</tr>
					<tr>
						<td>
							<input type="text" name="email" value="<?php echo $user['email'];?>" class="txt" />
						</td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" موافق " class="btn" tabindex="3" /></div>
			</form>
		</div>
	</div>
<?php } ?>
<?php include $this->gettpl('footer');?>