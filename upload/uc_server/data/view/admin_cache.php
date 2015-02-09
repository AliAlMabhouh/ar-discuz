<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>

<div class="container">
	<h3>تحديث الملفات المؤقتة</h3>
	<?php if($updated) { ?>
		<div class="correctmsg"><p>تم التحديث بنجاح.</p></div>
	<?php } ?>
	<div class="mainbox">
		<form action="admin.php?m=cache&a=update" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
			<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
				<tr>
					<td class="option"><input type="checkbox" name="type[]" value="data" class="checkbox" checked="checked" /></td>
					<td>تحديث ذاكرة البيانات المؤقتة</td>
				</tr>
				<tr>
					<td class="option"><input type="checkbox" name="type[]" value="tpl" class="checkbox" /></td>
					<td>تحديث ذاكرة القوالب المؤقتة</td>
				</tr>
				<tr class="nobg">
					<td colspan="2"><input type="submit" value="موافق" class="btn" /></td>
				</tr>
			</table>
		</form>
	</div>
</div>

<?php include $this->gettpl('footer');?>