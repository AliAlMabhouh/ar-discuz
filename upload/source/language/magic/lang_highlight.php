<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_highlight.php
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'highlight_name'	=> 'بطاقة الالوان',
	'highlight_desc'	=> 'تمييز لوني لعاوين المواضيع',
	'highlight_expiration'	=> 'الإنتهاء',
	'highlight_expiration_comment'	=> 'تاريخ إنتهاء التمييز, الإفتراضي 24 ساعة',
	'highlight_forum'	=> 'المنتديات المسموحة',
	'highlight_info_tid'	=> 'تمميز عنوانين مواضيع محدد لمدة  {expiration} ساعة, أدخل رقم الموضوع',
	'highlight_info_blogid'		=> 'يمكنك تمييز عنوان موضوع , أو تغيير لون العنوان',//'可以将日志或帖子的标题高亮，变更颜色',
	'highlight_color'	=> 'اللون',
	'highlight_info_nonexistence_tid'	=> 'الرجاء قم بتحديد الموضوع',
	'highlight_info_nonexistence_blogid'	=> 'الرجاء تحديد رقم المونة',//'请指定要高亮的日志',
	'highlight_succeed'	=> 'تم تمييز عنوان الموضوع بنجاح',
	'highlight_succeed_blogid'	=> 'تم تمييز عنوان المدونة',//'你操作的日志已高亮',
	'highlight_info_noperm'	=> 'للأسف,لا يمكنك إستخدام هذه البطاقة في هذا المنتدى',
	'highlight_info_notype'		=> 'خطأ, في نوع العملية.',//'参数错误，没有指定操作类型。',

	'highlight_notification'	=> 'الموضوع الخاص بك  <em>{subject}</em> إستخدم فيه {magicname} بواسطة {actor}, <a href="forum.php?mod=viewthread&tid={tid}">عرض</a>.',
	'highlight_notification_blogid'	=> 'العضو {actor} إستخدم دعامة {magicname} لمدونتك {subject}, <a href="home.php?mod=space&do=blog&id={blogid}">إذهب اليها!</a>',//'你的日志 {subject} 被 {actor} 使用了{magicname}，<a href="home.php?mod=space&do=blog&id={blogid}">快去看看吧！</a>',
);

