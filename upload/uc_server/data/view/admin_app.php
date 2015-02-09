<?php if(!defined('UC_ROOT')) exit('Access Denied');?>
<?php include $this->gettpl('header');?>

<script src="js/common.js" type="text/javascript"></script>
<script type="text/javascript">
var apps = new Array();
var run = 0;
function testlink() {
	if(apps[run]) {
		$('status_' + apps[run]).innerHTML = 'جاري الاتصال...';
		$('link_' + apps[run]).src = $('link_' + apps[run]).getAttribute('testlink') + '&sid=<?php echo $sid;?>';
	}
	run++;
}
window.onload = testlink;
</script>
<div class="container">
	<?php if($a == 'ls') { ?>
		<h3 class="marginbot">قائمة التطبيقات<a href="admin.php?m=app&a=add" class="sgbtn">اضافة تطبيق جديد</a></h3>
		<?php if(!$status) { ?>
			<div class="note fixwidthdec">
				<p class="i">اذا فشل الاتصال, الرجاء قم "بتعديل" اي بي التطبيق.</p>
			</div>
		<?php } elseif($status == '2') { ?>
			<div class="correctmsg"><p>تم تحديث قائمة التطبيقات بنجاح.</p></div>
		<?php } ?>
		<div class="mainbox">
			<?php if($applist) { ?>
				<form action="admin.php?m=app&a=ls" method="post">
					<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
					<table class="datalist fixwidth" onmouseover="addMouseEvent(this);">
						<tr>
							<th nowrap="nowrap"><input type="checkbox" name="chkall" id="chkall" onclick="checkall('delete[]')" class="checkbox" /><label for="chkall">حذف</label></th>
							<th nowrap="nowrap">ID</th>
							<th nowrap="nowrap">اسم التطبيق</th>
							<th nowrap="nowrap">وصلة التطبيق</th>
							<th nowrap="nowrap">حالة الاتصال</th>
							<th nowrap="nowrap">التفاصيل</th>
						</tr>
						<?php $i = 0;?>
						<?php foreach((array)$applist as $app) {?>
							<tr>
<!--vot-->							<td width="70"><input type="checkbox" name="delete[]" value="<?php echo $app['appid'];?>" class="checkbox" /></td>
								<td width="35"><?php echo $app['appid'];?></td>
								<td><a href="admin.php?m=app&a=detail&appid=<?php echo $app['appid'];?>"><strong><?php echo $app['name'];?></strong></a></td>
								<td><a href="<?php echo $app['url'];?>" target="_blank"><?php echo $app['url'];?></a></td>
<!--vot-->							<td width="140"><div id="status_<?php echo $app['appid'];?>"></div><script id="link_<?php echo $app['appid'];?>" testlink="admin.php?m=app&a=ping&inajax=1&url=<?php echo urlencode($app['url']);?>&ip=<?php echo urlencode($app['ip']);?>&appid=<?php echo $app['appid'];?>&random=<?php echo rand()?>"></script><script>apps[<?php echo $i;?>] = '<?php echo $app['appid'];?>';</script></td>
<!--vot-->							<td width="50"><a href="admin.php?m=app&a=detail&appid=<?php echo $app['appid'];?>">تعديل</a></td>
							</tr>
							<?php $i++?>
						<?php } ?>
						<tr class="nobg">
							<td colspan="9"><input type="submit" value="موافق" class="btn" /></td>
						</tr>
					</table>
					<div class="margintop"></div>
				</form>
			<?php } else { ?>
				<div class="note">
					<p class="i">لا يوجد سجلات!</p>
				</div>
			<?php } ?>
		</div>
	<?php } elseif($a == 'add') { ?>
		<h3 class="marginbot">اضافة تطبيق جديد<a href="admin.php?m=app&a=ls" class="sgbtn">رجوع الى قائمة التطبيقات</a></h3>
		<div class="mainbox">
			<table class="opt">
				<tr>
					<th>حدد نوع التثبيت:</th>
				</tr>
				<tr>
					<td>
						<input type="radio" name="installtype" class="radio" checked="checked" onclick="$('url').style.display='none';$('custom').style.display='';" />تثبيت مخصص
						<input type="radio" name="installtype" class="radio" onclick="$('url').style.display='';$('custom').style.display='none';" />تثبيت بواسطة وصلة (مستحسن)
					</td>
				</tr>
			</table>
			<div id="url" style="display:none;">
				<form method="post" action="" target="_blank" onsubmit="document.appform.action=document.appform.appurl.value;" name="appform">
					<table class="opt">
						<tr>
							<th>تثبيت التطبيق بواسطة وصلة:</th>
						</tr>
						<tr>
							<td><input type="text" name="appurl" size="50" value="http://domainname/install/index.php" style="width:300px;" /></td>
						</tr>
					</table>
					<div class="opt">
						<input type="hidden" name="ucapi" value="<?php echo UC_API;?>" />
						<input type="hidden" name="ucfounderpw" value="<?php echo $md5ucfounderpw;?>" />
						<input type="submit" name="installsubmit"  value="تثبيت" class="btn" />
					</div>
				</form>
			</div>
			<div id="custom">
				<form action="admin.php?m=app&a=add" method="post">
				<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
					<table class="opt">
						<tr>
							<th colspan="2">نوع التطبيق:</th>
						</tr>
						<tr>
							<td>
							<select name="type">
								<?php foreach((array)$typelist as $typeid => $typename) {?>
									<option value="<?php echo $typeid;?>"> <?php echo $typename;?> </option>
								<?php }?>
							</select>
							</td>
							<td></td>
						</tr>
						<tr>
							<th colspan="2">اسم التطبيق:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="name" value="" /></td>
							<td>كحد اقى 20 حرف.</td>
						</tr>
						<tr>
							<th colspan="2">وصلة التطبيق:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="url" value="" /></td>
							<td>ادخل وصلة التطبيق, للتوصيل ب UCenter. بدون "/" في النهاية</td>
						</tr>
						<tr>
							<th colspan="2">اي بي التطبيق (مهم جدا):</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="ip" value="" /></td>
							<td>اتركه فارغ اذا كان مشترك. اذا  لم يتم الاتصال بـ UCenter, حاول وضعه.</td>
						</tr>
						<tr>
							<th colspan="2">مفتاح الاتصال:</th>
						</tr>
						<tr>
							<td><input type="text" class="txt" name="authkey" value="" /></td>
							<td>فقط يتم استخدام احرف وارقام باللغة الانجليزية, 64 حرف كحد اقصى. يجب تعيين هذا الخيار بقيمة متوافقة , والا لن يتم الاتصال مع  UCenter.</td>
						</tr>


						<tr>
							<th colspan="2">المسار الحقيقي للتطبيق:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="apppath" value="" />
							</td>
							<td>الافتراضي هو فارغ, إذا قمت بإدخال المسار النسبي (من UC), البرنامج سوف يتم تحويله إلى المسار المطلق تلقائيا, مثل ../</td>
						</tr>
						<tr>
							<th colspan="2">وصلة الملف الشخصي الافتراضي:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="viewprourl" value="" />
							</td>
							<td>مثال: /space.php?uid=%s . حيث %s هو رقم العضو </td>
						</tr>
						<tr>
							<th colspan="2">اسم ملف  API التطبيق:</th>
						</tr>
						<tr>
							<td>
								<input type="text" class="txt" name="apifilename" value="uc.php" />
							</td>
							<td>ادخل اسم ملف  API التطبيق, لا يحتوي على مسار, الافتراضي هو  uc.php</td>
						</tr>
						<tr>
							<th colspan="2">علامة القالب:</th>
						</tr>
						<tr>
							<td><textarea class="area" name="tagtemplates"></textarea></td>
							<td valign="top">علامة القالب الحالي سوف يظهر في التطبيقات الاخرى</td>
						</tr>

						<tr>
							<th colspan="2">وصف علامة القالب :</th>
						</tr>
						<tr>
							<td><textarea class="area" name="tagfields"><?php echo $tagtemplates['fields'];?></textarea></td>
							<td valign="top">فقط في كل سطر وصف واحد, افصل بفاصلة ",". مثل:<br />عنوان,عنوان الموضوع<br />وصلة,وصلة الموضوع</td>
						</tr>
						<tr>
							<th colspan="2">تسجيل دخول كل التطبيقات في نفس الوقت?:</th>
						</tr>
						<tr>
							<td>
								<input type="radio" class="radio" id="yes" name="synlogin" value="1" /><label for="yes">نعم</label>
								<input type="radio" class="radio" id="no" name="synlogin" value="0" checked="checked" /><label for="no">لا</label>
							</td>
							<td>تفعيل هذه الخاصية, عندما يوجد اكثر من تطبيق وسجلت دخولك لاحد التطبيقات, فسيتم تسجيل الدخول تلقائي لهذا للتطبيقات الاخرى.</td>
						</tr>
						<tr>
							<th colspan="2">استقبلت اشعار?:</th>
						</tr>
						<tr>
							<td>
								<input type="radio" class="radio" id="yes" name="recvnote" value="1"/><label for="yes">نعم</label>
								<input type="radio" class="radio" id="no" name="recvnote" value="0" checked="checked" /><label for="no">لا</label>
							</td>
							<td></td>
						</tr>
					</table>
					<div class="opt"><input type="submit" name="submit" value=" موافق " class="btn" tabindex="3" /></div>
				</form>
			</div>
		</div>
	<?php } else { ?>
		<h3 class="marginbot">تعديل التطبيق<a href="admin.php?m=app&a=ls" class="sgbtn">رجوع الى قائمة التطبيقات</a></h3>
		<?php if($updated) { ?>
			<div class="correctmsg"><p>تم التحديث بنجاح.</p></div>
		<?php } elseif($addapp) { ?>
			<div class="correctmsg"><p>تم اضافة تطبيق بنجاح.</p></div>
		<?php } ?>
		<div class="mainbox">
			<form action="admin.php?m=app&a=detail&appid=<?php echo $appid;?>" method="post">
			<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>">
				<table class="opt">
					<tr>
						<th colspan="2">ID: <?php echo $appid;?></th>
					</tr>
					<tr>
						<th colspan="2">نوع التطبيق:</th>
					</tr>
					<tr>
						<td>
						<select name="type">
							<?php foreach((array)$typelist as $typeid => $typename) {?>
							<option value="<?php echo $typeid;?>" <?php if($typeid == $type) { ?>selected="selected"<?php } ?>> <?php echo $typename;?> </option>
							<?php }?>
						</select>
						</td>
						<td></td>
					</tr>

					<tr>
						<th colspan="2">اسم التطبيق:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="name" value="<?php echo $name;?>" /></td>
						<td>كحد اقى 20 حرف.</td>
					</tr>
					<tr>
						<th colspan="2">وصلة التطبيق:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="url" value="<?php echo $url;?>" /></td>
						<td>ادخل وصلة التطبيق, للتوصيل ب UCenter. بدون "/" في النهاية</td>
					</tr>
					<tr>
						<th colspan="2">وصلة التطبيق الاضافي:</th>
					</tr>
					<tr>
						<td><textarea name="extraurl" class="area"><?php echo $extraurl;?></textarea></td>
						<td>ادخل الوصلات الاضافية للتطبيق. ولا تضع  "/" في النهاية, في كل سطر وصلة.</td>
					</tr>
					<tr>
						<th colspan="2">اي بي التطبيق (مهم جدا):</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="ip" value="<?php echo $ip;?>" /></td>
						<td>اتركه فارغ اذا كان مشترك. اذا  لم يتم الاتصال بـ UCenter, حاول وضعه.</td>
					</tr>
					<tr>
						<th colspan="2">مفتاح الاتصال:</th>
					</tr>
					<tr>
						<td><input type="text" class="txt" name="authkey" value="<?php echo $authkey;?>" /></td>
						<td>فقط يتم استخدام احرف وارقام باللغة الانجليزية, 64 حرف كحد اقصى. يجب تعيين هذا الخيار بقيمة متوافقة , والا لن يتم الاتصال مع  UCenter.</td>
					</tr>

					<tr>
						<th colspan="2">المسار الحقيقي للتطبيق:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="apppath" value="<?php echo $apppath;?>" />
						</td>
						<td>الافتراضي هو فارغ, إذا قمت بإدخال المسار النسبي (من UC), البرنامج سوف يتم تحويله إلى المسار المطلق تلقائيا, مثل ../</td>
					</tr>
					<tr>
						<th colspan="2">وصلة الملف الشخصي الافتراضي:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="viewprourl" value="<?php echo $viewprourl;?>" />
						</td>
						<td>مثال: /space.php?uid=%s . حيث %s هو رقم العضو </td>
					</tr>
					<tr>
						<th colspan="2">اسم ملف  API التطبيق:</th>
					</tr>
					<tr>
						<td>
							<input type="text" class="txt" name="apifilename" value="<?php echo $apifilename;?>" />
						</td>
						<td>ادخل اسم ملف  API التطبيق, لا يحتوي على مسار, الافتراضي هو  uc.php</td>
					</tr>

					<tr>
						<th colspan="2">علامة القالب:</th>
					</tr>
					<tr>
						<td><textarea class="area" name="tagtemplates"><?php echo $tagtemplates['template'];?></textarea></td>
						<td valign="top">علامة القالب الحالي سوف يظهر في التطبيقات الاخرى</td>
					</tr>
					<tr>
						<th colspan="2">وصف علامة القالب :</th>
					</tr>
					<tr>
						<td><textarea class="area" name="tagfields"><?php echo $tagtemplates['fields'];?></textarea></td>
						<td valign="top">فقط في كل سطر وصف واحد, افصل بفاصلة ",". مثل:<br />عنوان,عنوان الموضوع<br />وصلة,وصلة الموضوع</td>
					</tr>
					<tr>
						<th colspan="2">تسجيل دخول كل التطبيقات في نفس الوقت?:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" class="radio" id="yes" name="synlogin" value="1" <?php echo $synlogin[1];?> /><label for="yes">نعم</label>
							<input type="radio" class="radio" id="no" name="synlogin" value="0" <?php echo $synlogin[0];?> /><label for="no">لا</label>
						</td>
						<td>تفعيل هذه الخاصية, عندما يوجد اكثر من تطبيق وسجلت دخولك لاحد التطبيقات, فسيتم تسجيل الدخول تلقائي لهذا للتطبيقات الاخرى.</td>
					</tr>
					<tr>
						<th colspan="2">استقبلت اشعار?:</th>
					</tr>
					<tr>
						<td>
							<input type="radio" class="radio" id="yes" name="recvnote" value="1" <?php echo $recvnotechecked[1];?> /><label for="yes">نعم</label>
							<input type="radio" class="radio" id="no" name="recvnote" value="0" <?php echo $recvnotechecked[0];?> /><label for="no">لا</label>
						</td>
						<td></td>
					</tr>
				</table>
				<div class="opt"><input type="submit" name="submit" value=" موافق " class="btn" tabindex="3" /></div>
<?php if($isfounder) { ?>
				<table class="opt">
					<tr>
						<th colspan="2">معلومات تكوين تطبيق في UCenter:</th>
					</tr>
					<tr>
						<th>
<textarea class="area" onFocus="this.select()">
define('UC_CONNECT', 'mysql');
define('UC_DBHOST', '<?php echo UC_DBHOST;?>');
define('UC_DBUSER', '<?php echo UC_DBUSER;?>');
define('UC_DBPW', '<?php echo UC_DBPW;?>');
define('UC_DBNAME', '<?php echo UC_DBNAME;?>');
define('UC_DBCHARSET', '<?php echo UC_DBCHARSET;?>');
define('UC_DBTABLEPRE', '`<?php echo UC_DBNAME;?>`.<?php echo UC_DBTABLEPRE;?>');
define('UC_DBCONNECT', '0');
define('UC_KEY', '<?php echo $authkey;?>');
define('UC_API', '<?php echo UC_API;?>');
define('UC_CHARSET', '<?php echo UC_CHARSET;?>');
define('UC_IP', '');
define('UC_APPID', '<?php echo $appid;?>');
define('UC_PPP', '20');
</textarea>
						</th>
						<td>اذا قمت بنسيان او فقدان بيانات تكوين التطبيق في UCenter , يمكنك نسخ هذه الملعومات ووضعها في ملف التطكوين</td>
					</tr>
				</table>
<?php } ?>
			</form>
		</div>
	<?php } ?>
</div>

<?php include $this->gettpl('footer');?>