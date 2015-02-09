<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_sofa.php
 *      Arabic By http://www.ar-discuz.net
 */

//SOFA = Soft Out of Focus Area  (i.e. Drop from Top)

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'sofa_name'	=> 'بطاقة السحب',
	'sofa_desc'	=> 'سحب / جلب موضوع محدد',
	'sofa_forum'	=> 'الأقسام المسموحة',
	'sofa_info'	=> 'سحب موضوع معين, أدخل رقم الموضوع',
	'sofa_info_nonexistence'	=> 'الرجاء قم بتحديد موضوع',
	'sofa_succeed'	=> 'تم السحب بنجاح',
	'sofa_info_noperm'	=> 'عذراً, لا يمكنك إستخدام الدعائم هنا',
	'sofa_info_user_noperm'	=> 'عذراً, لا يمكنك إستخدام الدعائم على هذا العضو',
	'sofa_info_sofaexistence'	=> 'أنت متأخر جداً, تم السحب سابقاً',
	'sofa_text'	=> 'أوه, the sofa is mine\n[color=gray]{actor} used {magicname} and grab sofa on {time}[/color]',

	'sofa_notification'	=> 'موضوعك <em>{subject}</em> تم استخدام {magicname} بواسطة {actor}, <a href="forum.php?mod=viewthread&tid={tid}">عرض</a>.',
);

