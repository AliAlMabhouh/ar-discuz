<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<script type="text/javascript">
function $(id) {
	return document.getElementById(id);
}
</script>

<div class="container">
	<form action="admin.php?m=user&a=login" method="post" id="loginform" <?php if($iframe) { ?>target="_self"<?php } else { ?>target="_top"<?php } ?>>
		<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
		<input type="hidden" name="seccodehidden" value="<?php echo $seccodeinit;?>" />
		<input type="hidden" name="iframe" value="<?php echo $iframe;?>" />
		<table class="mainbox">
			<tr>
				<td class="loginbox">
					<h1>UCenter</h1>
					<p>UCenter هو برنامج للتحكم بسكربت Discuz عدد الاعضاء والاي بي والاعدادات المتقدمة.</p>
				</td>
				<td class="login">
					<?php if($errorcode == UC_LOGIN_ERROR_FOUNDER_PW) { ?><div class="errormsg loginmsg"><p>خطأ في كلمة مرور المؤسس</p></div>
					<?php } elseif($errorcode == UC_LOGIN_ERROR_ADMIN_PW) { ?><div class="errormsg loginmsg"><p><em>فشل تسجيل الدخول!</em><br />خطأ في كلمة المرور او اسم المستخدم.</p></div>
					<?php } elseif($errorcode == UC_LOGIN_ERROR_ADMIN_NOT_EXISTS) { ?><div class="errormsg loginmsg"><p>هذا المدير غير موجود</p></div>
					<?php } elseif($errorcode == UC_LOGIN_ERROR_SECCODE) { ?><div class="errormsg loginmsg"><p>رمز الامان غير صالح!</p></div>
					<?php } elseif($errorcode == UC_LOGIN_ERROR_FAILEDLOGIN) { ?><div class="errormsg loginmsg"><p>لقد قمت بتسجيل الدخول عدة مرات بشكل خاطئ, الرجاء الانتظار 15 دقيقة لتسجيل الدخول مرة اخرى</p></div>
					<?php } ?>
					<p>
						<input type="radio" name="isfounder" value="1" class="radio" <?php if((isset($_POST['isfounder']) && $isfounder) || !isset($_POST['isfounder'])) { ?>checked="checked"<?php } ?> onclick="changeuser('founder')" id="founder" /><label for="founder"> المؤسس </label>
						<input type="radio" name="isfounder" value="0" class="radio" <?php if((isset($_POST['isfounder']) && !$isfounder)) { ?>checked="checked"<?php } ?> onclick="changeuser('manager')" id="admin" /><label for="admin">المدير</label>
					</p>
					<p id="usernamediv">اسم المستخدم: <input type="text" name="username" class="txt" tabindex="1" id="username" value="<?php echo $username;?>" /></p>
					<p>كلمة المرور: <input type="password" name="password" class="txt" tabindex="2" id="password" value="<?php echo $password;?>" /></p>
					<p>رمز الامان: <input type="text" name="seccode" class="txt seccode" tabindex="2" id="seccode" value="" /><img width="70" height="21" src="admin.php?m=seccode&seccodeauth=<?php echo $seccodeinit;?>&<?php echo rand();?>" class="checkcode" /></p>
					<p class="loginbtn"><input type="submit" name="submit" value="تسجيل الدخول" class="btn" tabindex="3" /><a href="http://faq.comsenz.com/viewnews-925" target="_blank" class="rstpsw">هل نسيت كلمة المرور؟</a></p>
				</td>
			</tr>
		</table>
	</form>
</div>
<script type="text/javascript">
<?php if((isset($_POST['isfounder']) && $isfounder) || !isset($_POST['isfounder'])) { ?>
	$('username').value='UCenter Administrator';
	$('username').disabled = true;
	$('username').readOnly = true;
	$('password').focus();
<?php } else { ?>
	$('username').disabled = false;
	$('username').readOnly = false;
	$('username').focus();
<?php } ?>

function changeuser(user) {
	if(user == 'founder') {
		$('username').value='UCenter Administrator';
		$('username').readOnly = true;
		$('username').disabled = true;
		$('password').focus();
	} else if(user == 'manager') {
		$('username').value='';
		$('username').readOnly = false;
		$('username').disabled = false;
		$('username').focus();
	}
}
</script>
<div class="footer">Powered by UCenter <?php echo UC_SERVER_VERSION;?> &copy; 2001 - 2015 <a href="http://www.comsenz.com/" target="_blank">Comsenz</a> Inc.</div>
<?php include $this->gettpl('footer');?>