<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_categorylist.php
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'categorylist_fids'			=> 'المنتديات',//'所在版块',
	'categorylist_fids_comment'		=> 'إختر المنتديات الهدف , إفصل بينها بفاصلة',//'设置允许参与新帖调用的版块，可以按住 CTRL 多选，全选或全不选均为不做限制',
	'categorylist_startrow'			=> 'صف البدء',//'起始数据行数',
	'categorylist_startrow_comment'		=> 'إذا كنت بحاجة لتعيين صف البدء,الرجاء إدخال الرقم, 0 هو الصف الأول',//'如需设定起始的数据行数，请输入具体数值，0 为从第一行开始，以此类推',
	'categorylist_showitems'		=> 'الصفوف',//'显示数据条数',
	'categorylist_showitems_comment'	=> 'حدد عدد الصفوف التي تريد عرضها , يجب أن تكون أكبر من 0',//'设置一次显示的主题条目数，请设置为大于 0 的整数',
	'categorylist_titlelength'		=> 'طول العنوان',//'标题最大字节数',
	'categorylist_titlelength_comment'	=> 'حدد الحد الأقصى من طول العنوان , إذا كان العنوان أكبر من القيمة سيتم قصه تلقائي , ضع 0 لتعطيل الخاصية',//'设置当标题长度超过本设定时，是否将标题自动缩减到本设定中的字节数，0 为不自动缩减',
	'categorylist_fnamelength'		=> 'طول عنوان المنتدى',//'标题最大字节数包含版块名称',
	'categorylist_fnamelength_comment'	=> 'تعيين الحد الأقصى من طول عنوان المنتدى',//'设置标题长度是否将所在版块名称的长度一同计算在内',
	'categorylist_summarylength'		=> 'طول الملخص',//'主题简短内容文字数',
	'categorylist_summarylength_comment'	=> 'تعيين مول عنوان الملخص , إستعمل القيمة 0 لإستخدام القيمة الافتراضية وهي (255)',//'设置主题简短内容的文字数，0 为使用默认值 255',
	'categorylist_tids'			=> 'مواضيع محددة',//'指定主题',
	'categorylist_tids_comment'		=> 'إختر المواضيع الهدف , إفصل بينها بفاصلة',//'设置要指定显示的主题 tid ，多个 tid 请用半角逗号“,”隔开。注意: 留空为不进行任何过滤',
	'categorylist_keyword'			=> 'الكلمات الدلالية',//'标题关键字',
	'categorylist_keyword_comment'		=> 'تعيين الكلمات الدلالية المستخدمة.<br />يمكنك إستعمال "*"  في الكلمات الدلالية.<br />إذا كنت تريد أن تستخدم بعض الكلمات الدلالية في نفس الوقت, يمكنك إستعمال  "AND". مثال : win32 AND unix.<br />إذا كنت تريد أن تستخدم كلمة واحدة من الكلمات الدلالية يمكنك إستعمال "|" أو "OR".مثال : win32 OR unix',//'设置标题包含的关键字。注意: 留空为不进行任何过滤； 关键字中可使用通配符 *； 匹配多个关键字全部，可用空格或 AND 连接。如 win32 AND unix； 匹配多个关键字其中部分，可用 | 或 OR 连接。如 win32 OR unix',
	'categorylist_sortids'			=> 'أرقام الترتيب(الأقسام?)',//'分类信息',
	'categorylist_sortids_comment'		=> 'حدد أنواع خاصة من المواضيع . ملاحظة : حدد الكل أو لا تحدد الكل لتعطيل التصفية',//'设置特定分类的主题。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_styleids'			=> 'رقم القالب',//'分类模板',
	'categorylist_styleids_comment'		=> 'أدخل رقم القالب من لوحة الإدارة',//'在后台对应的分类信息里面设置模板',
	'categorylist_styleids_style1'		=> ' قالب 1',//'样式1',
	'categorylist_styleids_style2'		=> ' قالب 2',//'样式2',
	'categorylist_styleids_style3'		=> ' قالب 3',//'样式3',
	'categorylist_styleids_style4'		=> ' قالب 4',//'样式4',
	'categorylist_styleids_style5'		=> ' قالب 5',//'样式5',
	'categorylist_typeids_all'		=> 'كل انواع المواضيع',//'全部的主题分类',
	'categorylist_categoryids'		=> 'أرقام الأقسام',//'分类信息',
	'categorylist_categoryids_comment'	=> 'أدخل أرقام الأقسام , أختارها كلها أو لا تختر شيئا',//'设置特定分类信息的主题。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_categoryids_all'	=> 'كل الأقسام',//'全部的分类信息',
	'categorylist_digest'		=> 'تصفية حسب المميز',//'精华主题过滤',
	'categorylist_digest_comment'	=> 'تصفية المميز , أختارها كلها أو لا تختر شيئا',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_digest_0'		=> 'موضوع عادي',//'普通主题',
	'categorylist_digest_1'		=> 'مميز 1',//'精华 I',
	'categorylist_digest_2'		=> 'مميز 2',//'精华 II',
	'categorylist_digest_3'		=> 'مميز 3',//'精华 III',
	'categorylist_stick'		=> 'تصفية حسب التثبيت',//'置顶主题过滤',
	'categorylist_stick_comment'	=> 'تصفية حسب التثبيت , إختارها كلها أو لا تختر شيئا',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_stick_0'		=> 'موضوع عادي',//'普通主题',
	'categorylist_stick_1'		=> 'مثبت 1',//'置顶 I',
	'categorylist_stick_2'		=> 'مثبت 2',//'置顶 II',
	'categorylist_stick_3'		=> 'مثبت 3',//'置顶 III',
	'categorylist_special'		=> 'تصفية حسب المواضيع الخاصة',//'特殊主题过滤',
	'categorylist_special_comment'	=> 'تصفية حسب المواضيع الخاصة , إختارها كلها أو لا تختر شيئا',//'设置特定的主题范围。注意: 全选或全不选均为不进行任何过滤',
	'categorylist_special_1'	=> 'موضوع إستطلاع',//'投票主题',
	'categorylist_special_2'	=> 'موضوع تجارة/منتج',//'商品主题',
	'categorylist_special_3'	=> 'موضوع طلب',//'悬赏主题',
	'categorylist_special_4'	=> 'موضوع فعالية',//'活动主题',
	'categorylist_special_5'	=> 'منوضوع تحدي',//'辩论主题',
	'categorylist_special_0'	=> 'موضوع عام',//'普通主题',
	'categorylist_special_reward'		=> 'تصفية حسب الطلب',//'悬赏主题过滤',
	'categorylist_special_reward_comment'	=> 'حدد الأنواع الخاصة بالجوائز',//'设置特定类型的悬赏主题',
	'categorylist_special_reward_0'		=> 'الكل',//'全部',
	'categorylist_special_reward_1'		=> 'متنهي',//'已解决',
	'categorylist_special_reward_2'		=> 'نشيط',//'未解决',
	'categorylist_recommend'		=> 'تصفية حسب إستحسان الموضوع',//'推荐主题过滤',
	'categorylist_recommend_comment'	=> 'عرض فقط المواضيع التي ينصح بها',//'设置是否只显示推荐的主题',
	'categorylist_orderby'			=> 'ترتيب حسب',//'主题排序方式',
	'categorylist_orderby_comment'		=> 'حدد ترتيب المواضيع',//'设置以哪一字段或方式对主题进行排序',
	'categorylist_orderby_lastpost'		=> 'آخر مشاركة',//'按最后回复时间倒序排序',
	'categorylist_orderby_dateline'		=> 'وقت البدء',//'按发布时间倒序排序',
	'categorylist_orderby_replies'		=> 'الردود',//'按回复数倒序排序',
	'categorylist_orderby_views'		=> 'المشاهدات',//'按浏览次数倒序排序',
	'categorylist_orderby_heats'		=> 'النشاط',//'按热度倒序排序',
	'categorylist_orderby_recommends'	=> 'الإستحسان',//'按主题评价倒序排序',
	'categorylist_orderby_hourviews'	=> 'المشاهدات مع الوقت المحدد',//'按指定时间内浏览次数倒序排序',
	'categorylist_orderby_todayviews'	=> 'مشاهدات اليوم',//'按当天浏览次数倒序排序',
	'categorylist_orderby_weekviews'	=> 'المشاهدات منذ أسبوع',//'按本周浏览次数倒序排序',
	'categorylist_orderby_monthviews'	=> 'المشاهدات منذ شهر',//'按当月浏览次数倒序排序',
	'categorylist_orderby_hours'		=> 'حدد الوقت (بالساعات)',//'指定时间(小时)',
	'categorylist_orderby_hours_comment'	=> 'تحديد وقت محدد للعرض بـ',//'指定时间内浏览次数倒序排序的时间值',
);

