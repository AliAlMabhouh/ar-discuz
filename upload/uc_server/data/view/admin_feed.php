<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<div class="container">
	<h3 class="marginbot">
		قائمة الاخبار
		<?php if($user['allowadminnote'] || $user['isfounder']) { ?><a href="admin.php?m=note&a=ls" class="sgbtn">قائمة الملاحظات</a><?php } ?>
		<?php if($user['allowadminlog'] || $user['isfounder']) { ?><a href="admin.php?m=log&a=ls" class="sgbtn">قائمة تسجيل الدخول</a><?php } ?>
		<a href="admin.php?m=mail&a=ls" class="sgbtn">قائمة الانتظار البريد</a>
	</h3>
	<div class="mainbox">
		<?php if($feedlist) { ?>
			<form action="admin.php?m=note&a=ls" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
			<table class="datalist" style="table-layout:fixed">
				<tr>
					<th width="100">الوقت</th>
					<th>&nbsp;</th>
				</tr>
				<?php foreach((array)$feedlist as $feed) {?>
					<tr>
						<td><?php echo $feed['dateline'];?></td>
						<td><?php echo $feed['title_template'];?></td>
					</tr>
				<?php } ?>
				<tr class="nobg">
					<td></td>
					<td class="tdpage"><?php echo $multipage;?></td>
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

<?php include $this->gettpl('footer');?>