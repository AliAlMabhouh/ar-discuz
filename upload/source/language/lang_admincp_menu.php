<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_admincp_menu.php 32130 2012-11-14 09:20:40Z zhengqingpeng $
 *      Arabic By http://www.ar-discuz.net
 */
if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(


	'header_index'		=> 'الرئيسية',//'首页',
	'header_global'		=> 'عام',//'全局',
	'header_forum'		=> 'الأقسام',//'论坛',
	'header_user'		=> 'الأعضاء',//'用户',
	'header_topic'		=> 'المواضيع',//'内容',
	'header_extended'	=> 'الملحقات',//'扩展',
	'header_plugin'		=> 'الهاكات',//'插件',
	'header_style'		=> 'التصميم',//'界面',
	'header_adv'		=> 'الإعلانات',//'广告',
	'header_tools'		=> 'أدوات المنتدى',//'工具',
	'menu_grid' => 'شبكة المواضيع بالرئيسية',
	'header_uc'		=> 'اليوسنتر',//
	'header_welcome'	=> '.مرحبا بك في لوحة تحكم المنتدى الخاصة بك ',//'你好',
	'header_logout'		=> 'تسجيل الخروج',//'退出',
	'header_bbs'		=> '&nbsp;عودة للمنتدى',//'站点首页',
	'header_portal'		=> 'المجلة',//'门户',
	'header_group'		=> 'المجموعات الاجتماعية',//'群组',
	'header_safe' => 'الحماية من السبام',
	'header_founder'	=> 'أدوات المدير',//'站长',
	'header_cloudaddons'		=> 'مركز التطبيقات(صيني)',//'扩展中心',
	'menu_setting_antitheft' => 'مضاد السرقة',

	'menu_html' => 'إدارة HTML',

	'menu_home'			=> 'لوحة تحكم الإدارة',//'管理中心首页',
	'menu_home_clearhistorymenus'	=> 'حذف تاريخ العمليات',//'清空历史操作',

	'menu_setting_basic'		=> 'الإعدادات الأساسية',//'站点信息',
	'menu_setting_access'		=> 'التسجيل والتحكم',//'注册与访问',
	'menu_setting_customnav'	=> 'شريط التنقل',//'导航栏',
	'menu_setting_styles'		=> 'إعدادات الإستايل',//'界面设置',
	'menu_setting_optimize'		=> 'الارشفة والخادم',//'优化设置',
	'menu_setting_seo'	=> 'إعدادات الأرشفة SEO',
	'menu_setting_functions'	=> 'مزايا المنتدى',//'站点功能',
	'menu_setting_domain'		=> 'إعدادات النطاق',//'域名设置',
	'menu_setting_user'		=> 'صلاحيات الأعضاء',//'用户权限',
	'menu_setting_credits'		=> 'إعدادات الأرصدة',//'积分设置',
	'menu_setting_mail'		=> 'إعدادات البريد الإلكتروني',//'邮件设置',
	'menu_setting_sec'		=> 'إعدادات الحماية',//'防灌水设置',
	'menu_setting_datetime'		=> 'إعدادات الوقت',//'时间设置',
	'menu_setting_attachments'	=> 'إعدادات المرفقات',//'上传设置',
	'menu_setting_imgwater'		=> 'العلامة المائية',//'水印设置',
	'menu_setting_uc'		=> 'إعدادات اليوسينتر',//'UCenter 设置',
	'menu_setting_uchome'		=> 'UCHome اعددات',//'UCHome 设置',
	'menu_setting_follow' => 'إعدادات التغريدات',
	'menu_setting_home'		=> 'إعدادات الملف الشخصي',//'空间设置',
	'menu_setting_search'		=> 'إعدادات البحث',//'搜索设置',
	'menu_setting_district'		=> 'إعدادات الدول والسكن',//'地区设置',
	'menu_setting_ranklist'		=> 'قائمة الترتيب',//'排行榜设置',
	'menu_setting_mobile'	=> 'الهاتف المحمول',
	'menu_setting_tag'	=> 'الكلمات الدلالية',


	'menu_forums'			=> 'الأقسام',//'版块管理',
	'menu_forums_merge'		=> 'دمج الأقسام',//'版块合并',
	'menu_forums_threadtypes'	=> 'انواع المواضيع',//'主题分类',
	'menu_forums_infotypes'		=> 'انواع الأقسام',//'分类信息',//vot: !!! May be 'Sort IDs',/'Category(ies)',/
	'menu_forums_infooption'	=> 'خيارات الانواع',//'分类信息选项',


	'menu_members_add'		=> 'إضافة عضو',//'添加用户',
	'menu_members_edit'		=> 'تعديل عضو',//'用户管理',
	'menu_members_newsletter'	=> 'النشرة الإدارية',//'发送通知',
	'menu_members_mobile' => 'إرسال إشعار للهواتف',
	'menu_usertag' => 'الكلمات الدلالية للعضو',
	'menu_members_edit_ban_user'	=> 'حظر عضو',//'禁止用户',
	'menu_members_ipban'		=> 'حظر  IP ',//'禁止 IP',
	'menu_members_credits'		=> 'أرصدة المكافأت',//'积分奖惩',
	'menu_members_profile'		=> 'الملف الشخصي للعضو',//'用户栏目',
	'menu_members_profile_group'	=> 'مجموعات الأعضاء',
	'menu_members_verify_setting'	=> 'إعدادات التحقق',//'认证设置',
	'menu_members_stat'		=> 'الإحصائيات',//'资料统计',
	'menu_moderate_modmembers'	=> 'الإشراف على الأعضاء الجدد',//'审核新用户',
	'menu_profilefields'		=> 'حقول الملف الشخصي',//'用户栏目定制',
	'menu_admingroups'		=> 'مجموعات الإدارة',//'管理组',
	'menu_usergroups'		=> 'مجموعات الأعضاء',//'用户组',
	'menu_follow' => 'المتابعة',//'推荐关注',
	'menu_defaultuser'		=> 'الأعضاء الافتراضيون',//'推荐好友',

	'menu_moderate_posts'		=> 'الإشراف على المشاركات',//'审核帖子',
	'menu_moderate_blogs'		=> 'المدونات',//'审核日志',
	'menu_moderate_doings'		=> 'الأفعال',//'审核记录',
	'menu_moderate_pictures'	=> 'الصور',//'审核图片',
	'menu_moderate_shares'		=> 'المنشورات',//'审核分享',
	'menu_moderate_comments'	=> 'التعليقات',//'审核评论/留言',
	'menu_moderate_articles'	=> 'المقالات',//'审核文章',
	'menu_moderate_articlecomments'	=> 'تعليقات المقالات',//'审核文章评论',
	'menu_maint_threads'		=> 'إدارة المواضيع',//'主题管理',
	'menu_maint_prune'		=> 'حذف جماعي للمشاركات',//'批量删帖',
	'menu_maint_attaches'		=> 'إدارة المرفقات',//'附件管理',
	'menu_maint_threads_group'	=> 'الإشراف على مواضيع المجموعات',//'群组主题管理',
	'menu_maint_prune_group'	=> 'الحذف الجماعي لمواضيع المجموعات',//'群组批量删帖',
	'menu_maint_attaches_group'	=> 'الإشراف على مرفقات المجموعات',//'群组附件管理',
		'menu_setting_collection' => 'إدارة ألبومات المشاركات',
	'menu_posting_tags'		=> 'إدارة الكلمات الدلالية',//'标签管理',
	'menu_posting_censors'		=> 'تصفية الكلمات السيئة',//'词语过滤',
	'menu_maint_report'		=> 'التبليغات',//'用户举报',
	'menu_threads_forumstick'	=> 'التثبيت المتعدد',//'多版块置顶',
	'menu_post_position_index'	=> 'تحسين المشاركات',//'帖子优化',
	'menu_postcomment'	=> 'نشر التعليقات',
	'menu_maint_doing'		=> 'إدارة الأفعال',//'记录管理',
	'menu_maint_blog'		=> 'إدارة المدونات',//'日志管理',
	'menu_maint_blog_recycle_bin' => 'تسجيل سلة المحذوفات',
	'menu_maint_feed'		=> 'إدارة الأخبار',//'动态管理',
	'menu_maint_album'		=> 'إدارة الألبومات',//'相册管理',
	'menu_maint_pic'		=> 'إدارة الصور',//'图片管理',
	'menu_maint_comment'		=> 'إدارة التعليقات /الردود',//'评论/留言管理',
	'menu_maint_share'		=> 'إدارة المنشورات',//'分享管理',

	'menu_posting_attachtypes'	=> 'حجم المرفقات وانواعها',//'附件类型尺寸',
	'menu_moderate_recyclebin'	=> 'سلة المهملات',//'主题回收站',
	'menu_moderate_recyclebinpost'	=> 'سلة مهملات الردود',

	'menu_founder'			=> 'معلومات المدير',//'站点信息',
	'menu_founder_perm'		=> 'صلاحيات فريق الإدارة',//'后台管理团队',
	'menu_founder_groupperm'	=> 'تعديل صلاحيات المجموعة - {group}',//'编辑团队职务权限 - {group}',
	'menu_founder_permgrouplist'	=> 'تعديل الصلاحيات - {perm}',//'编辑权限 - {perm}',
	'menu_founder_memberperm'	=> 'تعديل صلاحيات العضو - {username}',//'编辑团队成员 - {username}',
	
	'menu_patch' => 'مركز الأمن - لا ننصح به',
	'menu_upgrade' => 'الترقية عبر الإنترنت - لا ننصح به',
	'menu_optimizer' => 'المحسن',
	'menu_security' => 'إدارة الأمان',

	'menu_addons'			=> 'مركز التطبيقات(صيني)',//'扩展中心',
	'menu_plugins'			=> 'الهاكات',//'插件',
	'menu_tasks'			=> 'المهام',//'站点任务',
	'menu_magics'			=> 'الدعائم',//'道具中心',
	'menu_medals'			=> 'الأوسمة',//'勋章中心',
	'menu_misc_help'		=> 'التعليمات',//'站点帮助',
	'menu_google'			=> 'بحث جوجل',//'Google 搜索',
	'menu_ec'			=> 'التجارة الالكترونية (غير معرب)',//'电子商务',
	'menu_card'	=> 'إعادة شحن',

	'menu_styles'			=> 'إدارة الإستايلات',//'风格管理',
	'menu_styles_templates'		=> 'إدارة القوالب',//'模板管理',
	'menu_posting_smilies'		=> 'إدارة الابتسامات',//'表情管理',
	'menu_click'			=> 'إدارة التقييم',//'表态动作',
	'menu_thread_icon'		=> 'أيقونات الموضوع',//'主题图标',
	'menu_thread_stamp'		=> 'أختام الموضوع',//'主题图章',
	'menu_posting_editor'		=> 'إعدادات المحرر',//'编辑器设置',
	'menu_misc_onlinelist'		=> 'أيقونات التواجد',//'在线列表图标',

	'menu_misc_link'		=> 'روابط',//'友情链接',
	'menu_misc_relatedlink'	=> 'روابط ذات صلة',
		'memu_focus_topic'		=> 'مواضيع مستحسن زيارتها',//'站长推荐',
	'menu_adv_custom'		=> 'الإعلانات التجارية',//'站点广告',

	'menu_maint_blog_recycle_bin' => 'سجل سلة المحذوفات',

	'menu_misc_announce'		=> 'إعلانات المنتدى',//'站点公告',
	'menu_tools_updatecaches'	=> 'تحديث الكاش',//'更新缓存',
	'menu_tools_postposition'	=> 'تحسين مواقع المشاركات',//'高楼贴优化',
	'menu_tools_updatecounters'	=> 'تحديث الإحصائيات',//'更新统计',
	'menu_tools_javascript'		=> 'نداءات الجافا سكربت',//'数据调用',
	'menu_tools_relatedtag'		=> ' الكلمات الدلالية المتعلقة',//' 标签聚合',
	'menu_tools_creditwizard'	=> 'معالجة الأرصدة',//'积分策略向导',
	'menu_tools_fileperms'		=> 'فحص صلاحيات الملفات',//'文件权限检查',
	'menu_tools_hookcheck' => 'فحص الخطاطيف (hooks)',
	'menu_tools_filecheck'		=> 'فحص الملفات',//'文件校验',
	'menu_forum_scheme'		=> 'نظام برنامج الموقع',//'站点方案管理',
	'menu_db'			=> 'قاعدة البيانات',//'数据库',
	'menu_postsplit'		=> 'تقسيم المشاركات',//'帖子分表',
	'menu_threadsplit'		=> 'تحسين جداول المواضيع',//'主题分表',
	'menu_membersplit' => 'تحسين جداول الأعضاء',
	'menu_logs'			=> 'السجلات',//'运行记录',
	'menu_custommenu_manage'	=> 'إدارة قائمة مخصصة',//'常用操作管理',
	'menu_misc_cron'		=> 'الجدولة الدورية',//'计划任务',

	'menu_article'		=> 'إدارة المقالات',//'文章管理',
	'menu_portalcategory' => 'أقسام القنوات',
	'menu_portalcategory'	=> 'أقسام المجلة',//'日志分类',
	'menu_blogcategory'	=> 'أقسام المدونات',
	'menu_albumcategory'	=> 'أقسام الألبومات',//'相册分类',
	'menu_block'		=> 'المربعات الجانبية',//'模块管理',
	'menu_blockstyle'	=> 'ستايلات المربعات الجانبية',//'模块样式',
	'menu_portalpermission' => 'قائمة الأذونات',
	'menu_blockxml'	=> ' موديلات الطرف الثالث ',
	'menu_topic'		=> 'إدارة المواضيع',//'专题管理',
	'menu_html' => 'HTML管理',
	'menu_diytemplate'	=> 'إدارة إستايل مخصص',//'DIY页面管理',

	'menu_group_setting'	=> 'إعدادات المجموعات',//'群组设置',
	'menu_group_type'	=> 'أقسام المجموعات',//'群组分类',
	'menu_group_manage'	=> 'إدارة المجموعات',//'群组管理',
	'menu_group_userperm'	=> 'صلاحيات المجموعات',//'群主权限',
	'menu_group_level'	=> 'مستويات المجموعات',//'群组等级',
	'menu_group_mod' => 'مراجعة المجموعات',
	
	'menu_safe_setting' => 'الإعدادات الأساسية',
	'menu_safe_security' => 'الجدار المائي',
	'menu_safe_seccheck' => 'إعدادات التحقق',
	'menu_safe_accountguard' => 'حارس الحساب',
	'menu_setting_manyou'	=> 'Manyou',
	'menu_setting_qqconnect'	=> 'QQconnect ',

	'menu_cloud_doctor' => 'أدوات التشخيص',

	'admincp_title' => ' لوحة الإدارة '.$_G['setting']['bbname'],


);

?>