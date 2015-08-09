<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_portalcp.php 30107 2012-05-11 02:10:58Z svn_project_zhangjie $
 *      Arabic By http://www.ar-discuz.net
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array(
	'block_diy_nopreview'		=> '<p>هذه القائمة الجانبية تحتوي على  js, لا يمكنك المعاينة, الرجاء الحفظ للمشاهدة.</p>',
	'block_diy_summary_html_tag'	=> 'اخطاء المحتوى المخصص, HTML كلمات دلالية:',
	'block_diy_summary_not_closed'	=> ' غير متطابق',
	'block_all_category'		=> 'كل الأقسام',//'全部分类',
	'block_first_category'		=> 'أعلى الأقسام',//'顶级分类',
	'block_all_forum'		=> 'كل المنتديات',//'全部版块',
	'block_all_group'		=> 'جميع مجموعات الأعضاء',//'全部用户组',
	'block_all_type'		=> 'كل الأنواع',//'全部分类',
	'file_size_limit'		=> 'الملف تجاوز  {size} ك.ب, الرجاء الرجوع.',//'文件不能大于 {size} kb，请返回．',
	'set_to_conver'			=> 'وضع كغلاف',//'设为封面',
	'small_image'			=> 'صورة مصغرة',//'小图',
	'insert_small_image'		=> 'إدراج صورة مصغرة',//'插入小图',
	'insert_large_image'		=> 'إدراج صورة كاملة',//'插入大图',
	'insert_file'			=> 'ادراج ملف',//'插入文件',
	'delete'			=> 'حذف',//'删除',
	'upload_error'			=> 'فشل الرفع',//'上传失败',
	'upload_remote_failed'		=> 'فشل الرفع عن بعد',//'远程上传失败',
	'article_noexist'		=> 'المقالة المطلوبة غير موجودة',//'指定的文章不存在，请检查',
	'article_noallowed'		=> 'أنت لا تملك الصلاحيات للقيام بهذه العملية للمقالة',//'你没有权限对指定的文章进行操作',
	'article_publish_noallowed'	=> 'أنت لا تملك الصلاحيات لنشر مقالة',//'你没有权限进行文章发布操作',
	'article_category_empty'	=> 'عذراً, القسم لا يمكن ان يكون فارغ',//'抱歉，栏目不能为空',
	'article_edit_nopermission'	=> 'عذراً, أنت لا تمتلك صلاحيات لتعديل هذه المقالة',//'抱歉，您没有权限进行当前文章操作',
	'article_publish'		=> 'نشر مقالة',//'发布文章',
	'article_manage'		=> 'إدارة مقالة',//'管理文章',
	'article_tag'			=> 'الكلمات الدلالية',//'标签',
	'select_category'		=> 'حدد قسم',//'选择分类',
	'blockstyle_diy'		=> 'قالب مخصص',//'自定义模板',

	'article_pushplus_info'		=> '<p><center><i><a href="{url}" class="xg1 xs1">هذه المقالة مقدمة من  {author}</a></i><center></p>',

	'diytemplate_name_null'		=> '[غير مكتمل]',//'[未填写]',
	'portal_view_name'		=> ' صفحة عرض المقالة',//' 文章查看页',
	'forum_viewthread_name'		=> ' صفحة عرض المشاركات',//' 帖子查看页',
	'portal/index'			=> 'الرئيسية',//'文章首页',
	'portal/list'			=> 'قائمة المقالات',//'文章列表页(公共)',
	'portal/view'			=> 'المقالة, رؤية الصفحة (عام)',//'文章查看页(公共)',
	'portal/comment'		=> 'صفحة قائمة تعليقات المقالة',//'文章评论页',
	'forum/discuz'			=> 'المنتدى',//'论坛首页',
	'forum/viewthread'		=> 'عرض مواضيع المنتدى',//'帖子查看首页(公共)',
	'forum/forumdisplay'		=> 'صفحات قائمة المنتديات (عام)',//'版块列表页(公共)',
	'group/index'			=> 'المجموعة الرئيسية',//'群组首页',
	'group/group_my'		=> 'المجموعات الخاصة بي',//'我的群组首页',
	'group/group'			=> 'المجموعات الرئيسية',//'群组内容页',
	'home/space_home'		=> 'الملف الشخصي',//'空间首页',
	'home/space_trade'		=> 'صفحة المنتجات',//'空间商品页',
	'home/space_top'		=> 'قائمة أعلى الملفات الشخصية',//'空间排行榜',
	'home/space_thread'		=> 'صفحة المواضيع',//'空间帖子页',
	'home/space_reward'		=> 'Space offering a reward page',//'空间悬赏页',
	'home/space_share_list'		=> 'صفحة قائموة المنشورات',//'空间分享列表页',
	'home/space_share_view'		=> 'صفحة المنشور',//'空间分享查看页',
	'space_share_view'		=> 'صفحة عرض المنشور',//'空间分享查看页',
	'home/space_poll'		=> 'صفحة الإستطلاعات',//'空间投票页',
	'home/space_pm'			=> 'صفحة الرسائل القصيرة',//'空间短消息页',
	'home/space_notice'		=> 'صفحة التذكير',//'空间提醒页',
	'home/space_group'		=> ' المجموعات صفحة',//'空间群组页',
	'home/space_friend'		=> 'صفحة الأصدقاء',//'空间好友页',
	'home/space_favorite'		=> 'صفحة المفضلة',//'空间收藏页',
	'home/space_doing'		=> 'صفحة المقولات',//'空间记录页',
	'home/space_debate'		=> 'صفحة التحديات',//'空间辩论页',
	'home/space_blog_view'		=> 'صفحة المدونات',//'空间日志查看页',
	'home/space_blog_list'		=> 'صفحة قائمة المدونات',//'空间日志列表页',
	'home/space_album_view'		=> 'صفحة قائمة صور الألبوم',//'空间相册查看页',
	'home/space_album_pic'		=> 'صفحة صورة الألبوم',//'空间图片查看页',
	'home/space_album_list'		=> 'مساحة صفحة قائمة الألبومات',//'空间相册列表页',
	'home/space_activity'		=> 'مساحة صفحة الفعاليات',//'空间活动页',
	'ranklist/ranklist'		=> 'كل الترتيبات',//'全部排行榜页',
	'ranklist/blog'			=> 'أعلى المدونات',//'日志排行榜页',
	'ranklist/poll'			=> 'أعلى الإستطلاعات',//'投票排行榜页',
	'ranklist/activity'		=> 'أعلى الفعاليات',//'活动排行榜页',
	'ranklist/forum'		=> 'أعلى الأقسام',//'版块排行榜页',
	'ranklist/picture'		=> 'أعلى الصور',//'图片排行榜页',
	'ranklist/group'		=> 'أعلى المجموعات',//'群组排行榜页',
	'ranklist/thread'		=> 'أعلى المواضيع',//'帖子排行榜页',
	'ranklist/member'		=> 'أعلى الأعضاء',//'用户排行榜页',
	'other_page'			=> 'موديلات غير  DIY ',//'非DIY模块',
	'upload'		=> 'رفع',
	'remote'		=> 'من رابط',
	'portal_index'		=> 'رئيسية المجلة',
	'portal_topic_blue'	=> 'الاستايل الازرق',
	'portal_topic_green'	=> 'الاستايل الاخضر',
	'portal_topic_grey'	=> 'الاستايل الرمادي',
	'portal_topic_red'	=> 'الاستايل الاحمر',

	'itemtypename0'			=> 'تلقائي',//'自动',
	'itemtypename1'			=> '<span style="color: #FF0000">ثابت</span>',//'<span style="color: #FF0000">固定</span>',
	'itemtypename2'			=> '<span style="color: #00BFFF">تعديل</span>',//'<span style="color: #00BFFF">编辑</span>',
	'itemtypename3'			=> '<span style="color: #0000FF">نشر</span>',//'<span style="color: #0000FF">推送</span>',

);