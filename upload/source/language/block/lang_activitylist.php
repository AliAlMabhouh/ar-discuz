<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_activitylist.php
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}


 
$lang = array
(
	'activitylist_fids'			=> 'المنتديات',//'所在版块',
	'activitylist_fids_comment'		=> 'أدخل المنتديات المستدعاه, يمكنك إستخدام زر CTRL للتحديد بشكل معتعدد',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'activitylist_uids'			=> 'أرقام الكتاب',//'发起者UID',
	'activitylist_uids_comment'		=> 'حدد الأعضاء المطلوبين لهذه العملية . إستخدم ","  للفصل بين أرقام الأعضاء',//'设置活动发起者UID，多个UID请用半角逗号“,”隔开。',
	'activitylist_startrow'			=> 'صف البدء',//'起始数据行数',
	'activitylist_startrow_comment'		=> 'إذا كنت بحاجة لتعيين صف البدء,الرجاء إدخال الرقم, 0 هو الصف الأول',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'activitylist_items'			=> 'الصفوف',//'显示数据条数',
	'activitylist_items_comment'		=> 'حدد عدد الصفوف التي تريد عرضها , يجب أن تكون أكبر من 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'activitylist_titlelength'		=> 'طول العنوان',//'标题最大字节数',
	'activitylist_titlelength_comment'	=> 'حدد الحد الأقصى من طول العنوان , إذا كان العنوان أكبر من القيمة سيتم قصه تلقائي , ضع 0 لتعطيل الخاصية',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'activitylist_fnamelength'		=> 'طول عنوان المنتدى',//'标题最大字节数包含版块名称',
	'activitylist_fnamelength_comment'	=> 'تعيين الحد الأقصى من طول عنوان المنتدى',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'activitylist_summarylength'		=> 'طول الملخص',//'主题简短内容文字数',
	'activitylist_summarylength_comment'	=> 'تعيين مول عنوان الملخص , إستعمل القيمة 0 لإستخدام القيمة الافتراضية وهي (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'activitylist_tids'			=> 'مواضيع محددة',//'指定主题',
	'activitylist_tids_comment'		=> 'تحديد مواضيع محددة عن طريق إدخال أرقام االمواضيع والفصل بينهم بـ ","',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'activitylist_keyword'			=> 'الكلمات الدلالية',//'标题关键字',
	'activitylist_keyword_comment'		=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'activitylist_typeids'			=> 'انواع المواضيع',//'主题分类',
	'activitylist_typeids_comment'		=> 'حدد أنواع خاصة من المواضيع . ملاحظة : حدد الكل أو لا تحدد الكل لتعطيل التصفية',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_typeids_all'		=> 'كل انواع المواضيع',//'全部的主题分类',
	'activitylist_sortids'			=> 'أنواع الترتيب(الأقسام?)',//'分类信息',
	'activitylist_sortids_comment'		=> 'حدد نماذج المواضيع , ملاحظة : حدد الكل او لا تحدد الكل لتعطيل التصفية',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_sortids_all'		=> 'كل الأقسام',//'全部的分类信息',
	'activitylist_digest'			=> 'تصفية المميز',//'精华主题过滤',
	'activitylist_digest_comment'		=> 'حدد حالة الموضوع من حيث التميز ',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_digest_0'			=> 'موضوع عادي',//'普通主题',
	'activitylist_digest_1'			=> 'مميز 1',//'精华 I',
	'activitylist_digest_2'			=> 'مميز 2',//'精华 II',
	'activitylist_digest_3'			=> 'مميز 3',//'精华 III',
	'activitylist_stick'			=> 'تصفية التثبيت',//'置顶主题过滤',
	'activitylist_stick_comment'		=> 'حدد حالة الموضوع من حيث التثبيت',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_stick_0'			=> 'موضوع عادي',//'普通主题',
	'activitylist_stick_1'			=> 'تثبيت 1 ',//'置顶 I',
	'activitylist_stick_2'			=> 'تثبيت 2',//'置顶 II',
	'activitylist_stick_3'			=> 'تثبيت 3',//'置顶 III',
	'activitylist_special'			=> 'تصفية حسب المواضيع الخاصة',//'特殊主题过滤',
	'activitylist_special_comment'		=> 'حدد نوع الموضوع',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'activitylist_special_1'		=> 'موضوع إستطلاع',//'投票主题',
	'activitylist_special_2'		=> 'موضوع تجارة/منتج',//'商品主题',
	'activitylist_special_3'		=> 'موضوع طلب',//'悬赏主题',
	'activitylist_special_4'		=> 'موضوع فعالية',//'活动主题',
	'activitylist_special_5'		=> 'موضوع تحدي',//'辩论主题',
	'activitylist_special_0'		=> 'موضوع عادي',//'普通主题',
	'activitylist_special_reward'		=> 'تصفية حسب الطلب',//'悬赏主题过滤',
	'activitylist_recommend_comment'	=> 'إظهار فقط المواضيع المستحسنة فقط',//'设置是否只显示推荐的主题',
	'activitylist_special_reward_0'		=> 'الكل',//'全部',
	'activitylist_special_reward_1'		=> 'منتهي',//'已解决',
	'activitylist_special_reward_2'		=> 'نشيط',//'未解决',
	'activitylist_recommend'		=> 'تصفية حسب الإستحسان',//'推荐主题过滤',
	'activitylist_recommend_comment'	=> 'إظهار فقط المواضيع المستحسنة فقط',//'设置是否只显示推荐的主题',
	'activitylist_orderby'			=> 'الترتيب حسب ',//'主题排序方式',
	'activitylist_orderby_comment'		=> 'حدد ترتيب المواضيع',//'设置以哪一字段或方式对主题进行排序',
	'activitylist_orderby_lastpost'		=> 'آخر مشاركة',//'按最后回复时间倒序排序',
	'activitylist_orderby_dateline'		=> 'وقت البدء',//'按发布时间倒序排序',
	'activitylist_orderby_replies'		=> 'الردود',//'按回复数倒序排序',
	'activitylist_orderby_views'		=> 'المشاهدات',//'按浏览次数倒序排序',
	'activitylist_orderby_heats'		=> 'نشيط',//'按热度倒序排序',
	'activitylist_orderby_recommends'	=> 'مستحسن',//'按主题评价倒序排序',
	'activitylist_orderby_hourviews'	=> 'المشاهدات مع الوقت المحدد',//'按指定时间内浏览次数倒序排序',
	'activitylist_orderby_todayviews'	=> 'مشاهدات اليوم',//'按当天浏览次数倒序排序',
	'activitylist_orderby_weekviews'	=> 'مشاهدات آخر أسبوع',//'按本周浏览次数倒序排序',
	'activitylist_orderby_monthviews'	=> 'مشاهدات آخر شهر',//'按当月浏览次数倒序排序',
	'activitylist_orderby_hours'		=> 'حدد الوقت (بالساعات)',//'指定时间(小时)',
	'activitylist_orderby_hours_comment'	=> 'تحديد وقت محدد للمشاهدات',//'指定时间内浏览次数倒序排序的时间值',
	'activitylist_orderby_todayhots'	=> 'النشيط اليوم',//'按当天累计售出数倒序排序',
	'activitylist_orderby_weekhots'		=> 'النشيط خلال آخر أسبوع',//'按本周累计售出数倒序排序',
	'activitylist_orderby_monthhots'	=> 'النشيط آخر شهر',//'按当月累计售出数倒序排序',
	'activitylist_price_add'		=> ' اضافي ',//' 附加 ',
	'activitylist_place'			=> 'الامكنة',//'活动地点',
	'activitylist_class'			=> 'النوع',//'活动类型',
	'activitylist_class_all'		=> 'كل الانواع',//'所有类型',
	'activitylist_gender'			=> 'الجنس',//'性别要求',
	'activitylist_gender_0'			=> 'الكل',//'不限',
	'activitylist_gender_1'			=> 'ذكر',//'男',
	'activitylist_gender_2'			=> 'أنثى',//'女',
	'activitylist_orderby_weekstart'	=> 'بدء الاسبوع الماضي',//'按一周内活动开始时间排序',
	'activitylist_orderby_monthstart'	=> 'بدء منذ شهر',//'按一月内活动开始时间排序',
	'activitylist_orderby_weekexp'		=> 'انتى منذ أسبوع',//'按一周内报名截止时间排序',
	'activitylist_orderby_monthexp'		=> 'إنتهى منذ شهر',//'按一月内报名截止时间排序',
	'activitylist_orderby_weekhot'		=> 'نشيط منذ أسبوع',//'按一周内热度排序',
	'activitylist_orderby_monthhot'	=> 'النشاط(الاشهر)',
	'activitylist_orderby_alltimehot'	=> 'جميع الأنشطة لم تنتهي في الوقت المحدد',
	'activitylist_highlight'	=> 'تسليط الضوء على القيمة التي تم الحصول عليها',
);

?>

?>