<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_profile.php
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'profile_name'		=> 'تحديث معلومات الملف الشخصي الخاص بك ',//'完善用户资料任务',
	'profile_desc'		=> 'قم بتعبئة الحقول التالية وسوف تحصل على مكافأة.',//'完善指定的用户资料获得相应的奖励。',

	'profile_fields'		=> array(
		'mp.realname'		=> 'الإسم الحقيقي',//'姓名',
		'mp.gender'			=> 'الجنس',//'性别',
		'mp.birthyear'		=> 'سنة الميلاد',//'生日(年)',
		'mp.birthmonth'		=> 'شهر الميلاد',//'生日(月)',
		'mp.birthday'		=> 'يوم الميلاد',//'生日(日)',
		'mp.bloodtype'		=> 'نوع الدم',//'血型',
		'mp.affectivestatus'	=> 'الحالة العاطفية',//'情感状态',
		'mp.birthprovince'	=> 'منطقة الميلاد',//'家乡(省)',
		'mp.birthcity'		=> 'مدينة الميلاد',//'家乡(市)',
		'mp.resideprovince'	=> 'منطقة الإقامة',//'居住地(省)',
		'mp.residecity'		=> 'مدينة الإقامة',//'居住地(市)'
	),

	'profile_view'	=> '<strong>عليك تعبئة العناصر التالية في المعلومات الشخصية الخاصة بك:</strong><br>
		<span style="color:red;">{profiles}</span><br><br>
		<strong>اتبع هذه الإرشادات لإتمام المهمة:</strong>
		<ul>
		<li><a href="home.php?mod=spacecp&ac=profile" target="_blank">قم بفتح صفحة المعلومات الشخصية الخاصة بك</a>;</li>
		<li>إضافة المذكورة أعلاه لمعلوماتك الشخصية.</li>
		</ul>',
);

?>