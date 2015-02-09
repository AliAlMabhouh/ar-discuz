<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_login.php 27449 2012-02-01 05:32:35Z zhangguosheng $
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'login_title'		=> 'لوحة تحكم الإدارة - تسجيل الدخول',//'登录管理中心',
	'login_username'	=> 'إسم المستخدم',//'用户名',
	'login_password'	=> 'كلمة المرور',//'密　码',

	'submit'		=> 'موافق',//'提交',
	'forcesecques'		=> 'مطلوب',//'必填项',
	'security_question'	=> 'سؤال الأمان',//'提　问',
	'security_answer'	=> 'الإجابة',//'回　答',
	'security_question_0'	=> 'بدون سؤال',//'无安全提问',
	'security_question_1'	=> 'ما هو إسم أمك ؟',//'母亲的名字',
	'security_question_2'	=> 'ما هو إسم جدك ؟',//'爷爷的名字',
	'security_question_3'	=> 'ما هي المدينة التي ولد فيها أبيك ؟',//'父亲出生的城市',
	'security_question_4'	=> 'ما هو إسم معلمك المفضل  ؟',//'你其中一位老师的名字',
	'security_question_5'	=> 'ما هو رقم هاتفك الشخصي ؟',//'你个人计算机的型号',
	'security_question_6'	=> 'ما هو مطعمك المفضل ؟',//'你最喜欢的餐馆名称',
	'security_question_7'	=> 'ما هي وجبتك المفضلة ؟',//'驾驶执照的最后四位数字',

	'login_tips'	=> ' ',
	'login_nosecques'	=> 'أنت لم تضع سؤال الأمان . لوضع سؤال الأمان أو تغييره  <a href="forum.php?mod=memcp&action=profile&typeid=1"> إضغط هنا </a> .',//'你还没有使用安全登录，请在个人中心设置你的安全提问后，再访问管理中心。你可以 <a href="forum.php?mod=memcp&action=profile&typeid=1" target="_blank">点击这里</a> 进入安全提问的设置。',

	'login_cplock'		=> 'تم قفل لوحة التحكم  !<br>الرجاء إعادة الزيارة بعد  <b>{ltime}</b> ثانية ',//'你的管理面板已经锁定! <br>请在<b> {ltime} </b>秒以后重新访问管理中心',
	'login_user_lock'	=> 'إذا ادخلت كلمة المرور خاطئة عدة مرات فسيتم إغلاق لوحة التحكم لمدة 15 دقيقة',//'由于你的登录密码错误次数过多,本次登录请求已经被拒绝. 请 15 分钟后重新尝试',
	'login_cp_noaccess'	=> '<b>لوحة الإدارة (أو هذه العملية) غير مفتوحة لك.</b><br><br>تم تسجيل العملية الحالية , لا تقم بأعمال مزعجة.',//'<b>管理中心(或此项操作)尚未对你开放</b><br><br>你的此次操作已经记录, 请勿非法尝试',
	'noaccess'		=> 'صلاحيات المدير (أو هذه العملية) غير مفتوحة لك. يرجى مراسلة المدير.',//'后台管理权限(或此项操作)尚未对你开放, 请联系站点管理员',


);

?>