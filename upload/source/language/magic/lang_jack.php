<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_jack.php
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'jack_name'		=> 'بطاقة الموضوع الأول',//'千斤顶',
	'jack_desc'		=> 'بإستخدام هذه البطاقة يمكنك إعلاء أي موضوع مباشرة لأول موضوع في القسم',//'可以将主题顶起一段时间，重复使用可延长帖子被顶起的时间',
	'jack_expiration'	=> 'وقت الإنتهاء',//'时长',
	'jack_expiration_comment'	=> 'إختر الوقت المحدد لبقاء الموضوع بأعلى , الإفتراضي 1 ساعة',//'设置主题可以被顶起多长时间，默认 1 小时',
	'jack_forum'		=> 'المنتدى الهدف',//'允许使用本道具的版块',
	'jack_info'		=> '<p class="mtn xw0 mbn">تم جعل الموضوع الأول لـ <span class="xi1 xw1 xs2">{expiration}</span> ساعة.</p><p class="mtn xw0 mbn">أنت الآن تملك <span class="xi1 xw1 xs2">{magicnum}</span> بطاقة الموضوع الأول لإستخدامها.</p>',//'<p class="mtn xw0 mbn">顶起指定的主题<span class="xi1 xw1 xs2"> {expiration} </span> 小时。</p> <p class="mtn xw0 mbn">你现在有<span class="xi1 xw1 xs2"> {magicnum} </span>个千斤顶可以使用。</p>',
	'jack_num'		=> 'عدد الدعامات المستخدمة:',//'本次使用数量:',
	'jack_num_not_enough'	=> 'العدد غير كافي أو أنك تستخدم الدعامة حاليا',//'道具数量不足或没有填写使用数量。',
	'jack_info_nonexistence'	=> 'الرجاء إختيار الموضوع الذي ترغب في أن يكون الأول',//'请指定要顶起的主题',
	'jack_succeed'		=> 'تم جعل الموضوع الأول بنجاح',//'千斤顶成功将主题顶起',
	'jack_info_noperm'	=> 'نأسف , لا يمكنك إستخدام بطاقة الموضوع الأول في هذا القسم',//'对不起，主题所在版块不允许使用本道具',

	'jack_notification'	=> '{actor} إستخدم {magicname} لموضوعك {subject}, <a href="forum.php?mod=viewthread&tid={tid}">عرض</a>',//'你的主题 {subject} 被 {actor} 使用了{magicname}，<a href="forum.php?mod=viewthread&tid={tid}">快去看看吧！</a>',
);

?>