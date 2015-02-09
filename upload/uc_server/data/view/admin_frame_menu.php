<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo UC_CHARSET;?>" />
<meta name="author" content="English by Valery Votintsev at sources.ru" />
<title>UCenter Administrator's Control Panel</title>
<style type="text/css">
/* common */
*{ word-wrap:break-word; outline:none; }
/*vot*/ body{ width:159px; background:#F2F9FD url(images/bg_repx_h.gif) right top no-repeat; color:#666; font:12px Verdana, Lucida, Helvetica, Arial, sans-serif; }
body, ul{ margin:0; padding:0; }
a{ color:#2366A8; text-decoration:none; }
	a:hover { text-decoration:underline; }
.menu{ position:relative; z-index:20; }
	.menu ul{ position:absolute; top:10px; right:-1px !important; right:-2px; list-style:none; width:150px; background:#F2F9FD url(images/bg_repx_h.gif) right -20px no-repeat; }
		.menu li{ margin:3px 0; *margin:1px 0; height:auto !important; height:24px; overflow:hidden; font-size:14px; font-weight:700; }
		.menu li a{ display:block; margin-right:2px; padding:3px 0 2px 30px; *padding:4px 0 2px 30px; border:1px solid #F2F9FD; background:url(images/bg_repno.gif) no-repeat 10px -40px; color:#666; }
			.menu li a:hover{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF; }
		.menu li a.tabon{ text-decoration:none; margin-right:0; border:1px solid #B5CFD9; border-right:1px solid #FFF; background:#FFF url(images/bg_repy.gif) repeat-y; color:#2366A8; }
/*vot*/ .footer{ position:absolute; z-index:10; right:13px; bottom:0; padding:5px 0; line-height:150%; background:url(images/bg_repx.gif) 0 -199px repeat-x; font-family:Verdana, Arial, sans-serif; font-size:10px; -webkit-text-size-adjust: none; }/*vot*/
</style>
<meta content="Comsenz Inc." name="Copyright" />
</head>
<body>
<div class="menu">
	<ul id="leftmenu">
		<li><a href="admin.php?m=frame&a=main" target="main" class="tabon">الرئيسية</a></li>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=ls" target="main">الاعدادات</a></li><?php } ?>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=register" target="main">التسجيل</a></li><?php } ?>
		<?php if($user['allowadminsetting'] || $user['isfounder']) { ?><li><a href="admin.php?m=setting&a=mail" target="main">البريد</a></li><?php } ?>
		<?php if($user['allowadminapp'] || $user['isfounder']) { ?><li><a href="admin.php?m=app&a=ls" target="main">التطبيقات</a></li><?php } ?>
		<?php if($user['allowadminuser'] || $user['isfounder']) { ?><li><a href="admin.php?m=user&a=ls" target="main">الاعضاء</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="admin.php?m=admin&a=ls" target="main">المدير</a></li><?php } ?>
		<?php if($user['allowadminpm'] || $user['isfounder']) { ?><li><a href="admin.php?m=pm&a=ls" target="main">الرسائل</a></li><?php } ?>
		<?php if($user['allowadmincredits'] || $user['isfounder']) { ?><li><a href="admin.php?m=credit&a=ls" target="main">النقاط</a></li><?php } ?>
		<?php if($user['allowadminbadword'] || $user['isfounder']) { ?><li><a href="admin.php?m=badword&a=ls" target="main">الكلمات السيئة</a></li><?php } ?>
		<?php if($user['allowadmindomain'] || $user['isfounder']) { ?><li><a href="admin.php?m=domain&a=ls" target="main">النطاقات</a></li><?php } ?>
		<?php if($user['allowadmindb'] || $user['isfounder']) { ?><li><a href="admin.php?m=db&a=ls" target="main">قاعدة البيانات</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="admin.php?m=feed&a=ls" target="main">قائمة البيانات</a></li><?php } ?>
		<?php if($user['allowadmincache'] || $user['isfounder']) { ?><li><a href="admin.php?m=cache&a=update" target="main">تحديث الذاكرة</a></li><?php } ?>
		<?php if($user['isfounder']) { ?><li><a href="admin.php?m=plugin&a=filecheck" target="main">الهاكات</a></li><?php } ?>
	</ul>
</div>
<div class="footer">Powered by UCenter <?php echo UC_SERVER_VERSION;?><br />&copy; 2001 - 2011 <a href="http://www.comsenz.com/" target="_blank">Comsenz</a> Inc.</div>
<script type="text/javascript">
	function cleartabon() {
		if(lastmenu) {
			lastmenu.className = '';
		}
		for(var i = 0; i < menus.length; i++) {
			var menu = menus[i];
			if(menu.className == 'tabon') {
				lastmenu = menu;
			}
		}
	}
	var menus = document.getElementById('leftmenu').getElementsByTagName('a');
	var lastmenu = '';
	for(var i = 0; i < menus.length; i++) {
		var menu = menus[i];
		menu.onclick = function() {
			setTimeout('cleartabon()', 1);
			this.className = 'tabon';
			this.blur();
		}
	}

	cleartabon();
</script>

<?php include $this->gettpl('footer');?>