<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>
<?php if($iframe) { ?>
<script type="text/javascript">
	var uc_menu_data = new Array();
	o = document.getElementById('header_menu_menu');
	elems = o.getElementsByTagName('A');
	for(i = 0; i<elems.length; i++) {
		uc_menu_data.push(elems[i].innerHTML);
		uc_menu_data.push(elems[i].href);
	}
	try {
		parent.uc_left_menu(uc_menu_data);
		parent.uc_modify_sid('<?php echo $sid;?>');
	} catch(e) {}
</script>
<?php } ?>
<div class="container">
	<h3>احصائيات  UCenter </h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['allowadminapp'] || $user['isfounder']) { ?><a href="admin.php?m=app&a=ls">التطبيقات</a><?php } else { ?>التطبيقات<?php } ?>:</em><?php echo $apps;?></li>
		<li><em><?php if($user['allowadminuser'] || $user['isfounder']) { ?><a href="admin.php?m=user&a=ls">الاعضاء</a><?php } else { ?>الاعضاء<?php } ?>:</em><?php echo $members;?></li>
		<li><em><?php if($user['allowadminpm'] || $user['isfounder']) { ?><a href="admin.php?m=pm&a=ls">الرسائل</a><?php } else { ?>الرسائل<?php } ?>:</em><?php echo $pms;?></li>
		<li><em>الاصدقاء:</em><?php echo $friends;?></li>
	</ul>
	
	<h3>حالة الملاحظة</h3>
	<ul class="memlist fixwidth">
		<li><em><?php if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">الرسائل الغير مرسلة</a><?php } else { ?>الرسائل الغير مرسلة<?php } ?>:</em><?php echo $notes;?></li>
		<?php if($errornotes) { ?>
			<li><em><?php if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls">فشل اشعار التطبيق</a><?php } else { ?>فشل اشعار التطبيق<?php } ?>:</em>		
			<?php foreach((array)$errornotes as $appid => $error) {?>
				<?php echo $applist[$appid]['name'];?>&nbsp;
			<?php }?>
		<?php } ?>
	</ul>
	
	<h3>بيئة النظــام</h3>
	<ul class="memlist fixwidth">
		<li><em>اصدار UCenter :</em>UCenter <?php echo UC_SERVER_VERSION;?> Release <?php echo UC_SERVER_RELEASE;?> <a href="http://www.discuz.net/forum-151-1.html" target="_blank">عرض اخر الاصدارات العربية</a> 
		<li><em>النظام & PHP:</em><?php echo $serverinfo;?></li>
		<li><em>البرنامج:</em><?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
		<li><em>اصدار  MySQL :</em><?php echo $dbversion;?></li>
		<li><em>صلاحيات الرفع:</em><?php echo $fileupload;?></li>
		<li><em>حجم قاعدة البيانات الحالي:</em><?php echo $dbsize;?></li>		
		<li><em>اسم الخادم:</em><?php echo $_SERVER['SERVER_NAME'];?> (<?php echo $_SERVER['SERVER_ADDR'];?>:<?php echo $_SERVER['SERVER_PORT'];?>)</li>
		<li><em>magic_quote_gpc:</em><?php echo $magic_quote_gpc;?></li>
		<li><em>allow_url_fopen:</em><?php echo $allow_url_fopen;?></li>		
	</ul>
	<h3>فريق تطوير  UCenter </h3>
	<ul class="memlist fixwidth">
		<li>
			<em>الحقوق:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">&#x5317;&#x4EAC;&#x5EB7;&#x76DB;&#x65B0;&#x521B;&#x79D1;&#x6280;&#x6709;&#x9650;&#x8D23;&#x4EFB;&#x516C;&#x53F8;</a></em>
		</li>
		<li>
			<em>إدارة:</em>
			<em class="memcont"><a href="http://www.discuz.net/home.php?mod=space&uid=1" target="_blank">&#x6234;&#x5FD7;&#x5EB7; (Kevin 'Crossday' Day)</a></em>
		</li>
		<li>
			<em>فريق التطوير:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=80629" target="_blank">Ning 'Monkey' Hou</a>,				
				<a href="http://www.discuz.net/home.php?mod=space&uid=875919" target="_blank">Jie 'tom115701' Zhang</a>
			</em>
		</li>
		<li>
			<em>فريق الحماية والامن:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=859" target="_blank">Hypo 'cnteacher' Wang</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=492114" target="_blank">Liang 'Metthew' Xu</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=285706" target="_blank">Wei (Sniffer) Yu</a>
			</em>
		</li>
		<li>
			<em>فريق التصميم والاستايل:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=294092" target="_blank">Fangming 'Lushnis' Li</a>,
				<a href="http://www.discuz.net/home.php?mod=space&uid=717854" target="_blank">Ruitao 'Pony.M' Ma</a>
			</em>
		</li>
		<li>
			<em>شكر خاص لـ:</em>
			<em class="memcont">
				<a href="http://www.discuz.net/home.php?mod=space&uid=122246" target="_blank">Heyond</a>
			</em>
		</li>
		<li>
			<em>موقع الشركة:</em>
			<em class="memcont"><a href="http://www.comsenz.com" target="_blank">http://www.Comsenz.com</a></em>
		</li>
		<li>
			<em>الموقع الرسمي:</em>
			<em class="memcont"><a href="http://www.discuz.com" target="_blank">http://www.Discuz.com</a></em>
		</li>
		<li>
			<em>المنتدى الرسمي:</em>
			<em class="memcont"><a href="http://www.discuz.net" target="_blank">http://www.Discuz.net</a></em>
		</li>
	</ul>
</div>

<?php echo $ucinfo;?>

<?php include $this->gettpl('footer');?>