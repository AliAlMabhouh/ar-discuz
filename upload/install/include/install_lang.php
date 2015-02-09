<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: install_lang.php 28275 2012-02-27 04:14:58Z monkey $
 */

define('UC_VERNAME', 'النسخة العربية');
$lang = array(
	'SC_GBK' => 'الصينية المبسطة',
	'TC_BIG5' => 'الصينية التقليدية',
	'AR_UTF8' => 'العربية UTF8',
	'TC_UTF8' => 'التقليدية UTF8 ',
	'EN_ISO' => 'ENGLISH ISO8859',
	'EN_UTF8' => 'ENGLIST UTF-8',

	'title_install' => SOFT_NAME.' النسخة العربية',
	'agreement_yes' => 'التنصيب',
	'agreement_no' => 'إلغاء',
	'notset' => 'غير معين',

	'message_title' => 'عنوان الرسالة',
	'error_message' => 'رسالة خطأ',
	'message_return' => 'رسالة العودة ',
	'return' => 'العودة',
	'install_wizard' => 'نذير',
	'config_nonexistence'	=> 'ملف الاعدادت الكونفيج غير موجود',//'配置文件不存在',
	'nodir'			=> 'الدليل غير موجود',//'目录不存在',
	'redirect' => 'سيتم التوجيه التلقائي<br>اذا كان متصفحك لا يدعم الانتقال التلقائي اضغط هنا',
	'auto_redirect' => 'سيتم التوجيه التلقائي',
	'database_errno_2003'	=> 'لا يمكن الاتصال بقاعدة البيانات، تحقق ما إذا كان يتم تشغيل قاعدة البيانات وعنوان ملقم قاعدة البيانات بشكل صحيح.',//'无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044'	=> 'غير قادر على إنشاء قاعدة بيانات جديدة، الرجاء التحقق من اسم قاعدة بيانات غير صحيحة.',//'无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045'	=> 'لا يمكن الاتصال بقاعدة البيانات، تحقق من صحة اسم مستخدم قاعدة البيانات وكلمة المرور.',//'无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_errno_1064'	=> 'SQL Syntax error',//'SQL 语法错误',

	'dbpriv_createtable'	=> 'لا يوجد صلاحية  CREATE TABLE , لا يمكن مواصلة عملية التثبيت.',//'没有CREATE TABLE权限，无法继续安装',
	'dbpriv_insert'		=> 'لا يوجد صلاحية  INSERT , لا يمكن مواصلة عملية التثبيت.',//'没有INSERT权限，无法继续安装',
	'dbpriv_select'		=> 'لا يوجد صلاحية SELECT, لا يمكن مواصلة عملية التثبيت.',//'没有SELECT权限，无法继续安装',
	'dbpriv_update'		=> 'لا يوجد صلاحية UPDATE , لا يمكن مواصلة عملية التثبيت.',//'没有UPDATE权限，无法继续安装',
	'dbpriv_delete'		=> 'لا يوجد صلاحية DELETE , لا يمكن مواصلة عملية التثبيت.',//'没有DELETE权限，无法继续安装',
	'dbpriv_droptable'	=> 'لا يوجد صلاحية DROP TABLE  للتثبيت.',//'没有DROP TABLE权限，无法安装',

	'db_not_null'		=> ' قاعدة بيانات UCenter مثبتة مسبقا, مواصلة التثيت سيتم حذف المعلومات القديمة.',//'数据库中已经安装过 UCenter, 继续安装会清空原有数据。',
	'db_drop_table_confirm'	=> 'لاستكمال التثبيت يجب مسح كافة البيانات القديمة ,استمرار?',

	'writeable' => 'تم التحقق',
	'unwriteable' => 'لم يتم التحقق',
	'old_step' => 'السابق',
	'new_step' => 'التالي',

	'database_errno_2003'	=> 'لا يمكن الاتصال بقاعدة البيانات, تحقق من اتصال السيرفر.',//'无法连接数据库，请检查数据库是否启动，数据库服务器地址是否正确',
	'database_errno_1044'	=> 'لا يمكن انشاء قاعدة بيانات جديدة , تفحص من ان اسم قاعدة البيانات صحيح.',//'无法创建新的数据库，请检查数据库名称填写是否正确',
	'database_errno_1045'	=> 'لا يمكن الاتصال بقاعدة البيانات, تفحص اسم المستخدم وكلمة المرور الخاصة بقاعدة البيانات.',//'无法连接数据库，请检查数据库用户名或者密码是否正确',
	'database_connect_error'	=> 'خطأ اتصال قاعدة البيانات.',//'数据库连接错误',

	'step_title_1' => 'التحقق من المعلومات',
	'step_title_2' => 'إختيار نوع التنصيب',
	'step_title_3' => 'إدخال البيانات',
	'step_title_4' => 'التنصيب',
	'step_env_check_title' => 'جاري عملية التحقق',
	'step_env_check_desc' => 'اذا رأيت ميزة ناقصة راسل مستضيفك',
	'step_db_init_title' => 'إدخال البيانات',
	'step_db_init_desc' => 'يرجى التأكد من صحة البيانات',

	'step1_file' => 'الملفات',
	'step1_need_status' => 'حالة التحقق اللازمة',
	'step1_status' => 'حالة التحقق النهائية',
	'not_continue' => 'لا تستطيع الإكمال',

	'tips_dbinfo' => 'معلومات الإتصال',
	'tips_dbinfo_comment' => '',
	'tips_admininfo' => 'معلومات مدير الموقع',
	'step_ext_info_title'	=> 'تم التثبيت بنجاح.',//'安装成功。',
	'step_ext_info_comment'	=> 'اضغط هنا لتسجيل الدخول',//'点击进入登陆',

	'ext_info_succ'		=> 'تم التثبيت بنجاح.',//'安装成功。',
	'install_submit'	=> 'موافق',//'提交',
	'install_locked' => 'التنصيب مغلق يرجى مراجعة الملف التالي<br /> '.str_replace(ROOT_PATH, '', $lockfile),
	'error_quit_msg' => 'النسخة تم تنصيبها و لن يتم التنصيب مرة أخرى إلا بعد حذف الملف أعلاه',

	'step_app_reg_title' => 'إختيار سكربت التنصيب',
	'step_app_reg_desc' => 'إختر نوع التنصيب الذي تريده',
	'tips_ucenter' => '؟ UCenter ما هو  ',
	'tips_ucenter_comment' => ' وقد تم انتاجه حتى يربط منتجات هذه الشركة بعضها ببعض  Comsenz أحد منتجات Ucenter </br>',

	'advice_mysql_connect'		=> 'Please check the mysql module is loaded correctly.',//'请检查 mysql 模块是否正确加载',
	'advice_fsockopen'		=> 'This function require the <b>allow_url_fopen</b> option to be <b>On</b> in php.ini. Please contact the server administrator to resolve this problem.',//'该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_gethostbyname'		=> 'PHP configuration is not allowed the <b>gethostbyname</b> function. Please contact the server administrator to resolve this problem.',//'是否php配置中禁止了gethostbyname函数。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents'	=> 'This function require the <b>allow_url_fopen</b> option to <b>On</b> in php.ini. Please contact the server administrator to resolve this problem.',//'该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml_parser_create'	=> 'This function require the PHP support for XML. Please contact the server administrator to resolve this problem.',//'该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'advice_fsockopen' => 'è¯¥ه‡½و•°éœ€è¦پ php.ini ن¸­ allow_url_fopen é€‰é،¹ه¼€هگ¯م€‚è¯·èپ”ç³»ç©؛é—´ه•†ï¼Œç،®ه®ڑه¼€هگ¯ن؛†و­¤é،¹هٹںèƒ½',
	'advice_pfsockopen' => 'è¯¥ه‡½و•°éœ€è¦پ php.ini ن¸­ allow_url_fopen é€‰é،¹ه¼€هگ¯م€‚è¯·èپ”ç³»ç©؛é—´ه•†ï¼Œç،®ه®ڑه¼€هگ¯ن؛†و­¤é،¹هٹںèƒ½',
	'advice_stream_socket_client' => 'وک¯هگ¦ PHP é…چç½®ن¸­ç¦پو­¢ن؛† stream_socket_client ه‡½و•°',
	'advice_curl_init' => 'وک¯هگ¦ PHP é…چç½®ن¸­ç¦پو­¢ن؛† curl_init ه‡½و•°',

	'ucurl'				=> 'رابط UCenter ',//'UCenter 的 URL',
	'ucpw'				=> 'كلمة مرور مدير UCenter ',//'UCenter 创始人密码',
	'ucip'				=> 'عنوان UCenter IP ',//'UCenter 的IP地址',
	'ucenter_ucip_invalid'		=> 'صيغة خاطئة , الرجاء إدخال  عنوان IP الصحيح',//'格式错误，请填写正确的 IP 地址',
	'ucip_comment'			=> 'في أغلب الاحيان يترك فارغ',//'绝大多数情况下您可以不填',

	'tips_siteinfo' => 'معلومات الموقع',
	'sitename' => 'اسم الموقع',
	'siteurl' => 'رابط الموقع ',

	'forceinstall'			=> 'Mandatory installation',//'强制安装',
	'dbinfo_forceinstall_invalid'	=> 'Current database table prefix is already used by the same data table! You can modify the "Table name prefix" to avoid deleting the old data, or choose to force the mandatory installation. Mandatory installation will delete all the old data, and this old data can not be restored.',//'当前数据库当中已经含有同样表前缀的数据表，您可以修改“表名前缀”来避免删除旧的数据，或者选择强制安装。强制安装会删除旧数据，且无法恢复',
	
	'click_to_back' => 'إضغط هنا للرجوع ',
	'adminemail' => ' الإيميل Email',
	'adminemail_comment' => 'إستعمل Gmail او بريد موقعك',
	'dbhost_comment' => 'localhost يمكن التنصيب على سيرفر محلي',
	'tablepre_comment' => 'اذا لا تعرف لا تغيرها',
	'forceinstall_check_label'	=> 'أريد حذف كافة البيانات، وبدء تثبيت جديدة!',//'我要删除数据，强制安装 !!!',

	'uc_url_empty'			=> 'يجب ملئ حقل عنوان UCenter ',//'您没有填写 UCenter 的 URL，请返回填写',
	'uc_url_invalid'		=> 'عنوان UCenter غير صالح',//'URL 格式错误',
	'uc_url_unreachable'		=> 'عنوان UCenter لا يمكن الوصول اليه, الرجاء تفحص ذلك',//'UCenter 的 URL 地址可能填写错误，请检查',
	'uc_ip_invalid'			=> 'لا يمكن استخلاص اسم النطاق , الرجاء إدخال ip الموقع',//'无法解析该域名，请填写站点的 IP',
	'uc_admin_invalid'		=> 'كلمة مرور الخاصة بمدير UCenter غير صالحة , أعد كتابتها',//'UCenter 创始人密码错误，请重新填写',
	'uc_data_invalid'		=> 'فشل اتصال UCenter . تأكد من عنوان  UCenter URL أنه صحيح',//'通信失败，请检查 UCenter 的URL 地址是否正确 ',
	'uc_dbcharset_incorrect'	=> 'ترميز قاعدة بيانات UCenter ليست مطابقة لترميز قاعدة بيانات المنتج الاخر',//'UCenter 数据库字符集与当前应用字符集不一致',
	'uc_api_add_app_error'		=> 'الاضافة الى تطبيق UCenter فشل ',//'向 UCenter 添加应用错误',
	'uc_dns_error'			=> 'UCenter DNS resolution error. Please return and fill in the UCenter IP address',//'UCenter DNS解析错误，请返回填写一下 UCenter 的 IP地址',

	'ucenter_ucurl_invalid' => 'غير صالح UCenter رابط الـ',
	'ucenter_ucpw_invalid' => 'غير صالحة UCenter كلمة المرور لـ',
	'siteinfo_siteurl_invalid' => 'رابط الموقع غير صالح',
	'siteinfo_sitename_invalid' => 'اسم الموقع غير صالح',
	'dbinfo_dbhost_invalid' => 'خادم قاعدة البيانات غير صالح',
	'dbinfo_dbname_invalid' => 'اسم قاعدة البيانات غير صالحة',
	'dbinfo_dbuser_invalid' => 'اسم مستخدم قاعدة البيانات غير صالح',
	'dbinfo_dbpw_invalid' => 'كلمة سر قاعدة البيانات غير صالحة',
	'dbinfo_adminemail_invalid' => 'إيميل المدير غير صالح',
	'dbinfo_tablepre_invalid' => 'بادئة الجداول غير صالح',
	'admininfo_username_invalid' => 'اسم المدير غير صالح',
	'admininfo_email_invalid' => 'الإيميل غير صالح',
	'admininfo_password_invalid' => 'كلمة سر المدير غير صالحة',
	'admininfo_password2_invalid' => 'كلمة مرور الثانية غير مطابقة',

	'install_dzfull' => '<br><label><input type="radio"'.(getgpc('install_ucenter') != 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="yes" onclick="if(this.checked)$(\'form_items_2\').style.display=\'none\';" />(Ucenter) تنصيب ديسكاز مع</label>',
	'install_dzonly' => '<br><label><input type="radio"'.(getgpc('install_ucenter') == 'no' ? ' checked="checked"' : '').' name="install_ucenter" value="no" onclick="if(this.checked)$(\'form_items_2\').style.display=\'\';" /> تنصيب ديسكاز فقط </label>',

	'username' => 'اسم المستخدم',
	'email' => 'إيميل المدير Email',
	'password' => 'كلمة المرور',
	'password_comment' => 'حبذا لو تستعمل حروف و ارقام ورموز',
	'password2' => 'أعد كلمة المرور',

	'admininfo_invalid' => 'معلومات المدير غير صالحة',
	'dbname_invalid' => 'قاعدة البيانات غير صالحة ',
	'tablepre_invalid' => 'بادئة الجداول غير صالحة',
	'admin_username_invalid' => ' اسم المستخدم غير صالح ',
	'admin_password_invalid' => 'كلمة السر غير صالحة',
	'admin_email_invalid' => 'الإيميل غير صالح ',
	'admin_invalid' => 'اسم المدير غير صالح',
	'admin_exist_password_error' => 'كلمة مرور المدير غير صالحة',

	'tagtemplates_subject'		=> 'Title',//'标题',
	'tagtemplates_uid'		=> 'User ID',//'用户 ID',
	'tagtemplates_username'		=> 'Posted by',//'发帖者',
	'tagtemplates_dateline'		=> 'Date',//'日期',
	'tagtemplates_url'		=> 'Templates URL',//'主题地址',

	'uc_version_incorrect'		=> 'إصدار UCenter الخاص بك قديم جداً. الرجاء الترقية إلى آخر إصدار . من هنا: http://www.comsenz.com/.',//'您的 UCenter 服务端版本过低，请升级 UCenter 服务端到最新版本，并且升级，下载地址：http://www.comsenz.com/ 。',
	'config_unwriteable'		=> 'نظام التثبيت لا يمكنه الكتابة في ملف الكونفيج. قم بإعطائه الاذونات config.inc.php وهي (666 or 777)',//'安装向导无法写入配置文件, 请设置 config.inc.php 程序属性为可写状态(777)',

	'install_in_processed' => 'إتمام التنصيب',
	'install_succeed'		=> 'تم التثيت بنجاح! اضغط هنا للدخول للمنتدى',//'安装成功，点击进入',
	'install_cloud' => 'ه®‰è£…وˆگهٹںï¼Œو¬¢è؟ژه¼€é€ڑDiscuz!ن؛‘ه¹³هڈ°<br>Discuz!ن؛‘ه¹³هڈ°è‡´هٹ›ن؛ژه¸®هٹ©ç«™é•؟وڈگé«کç½‘ç«™وµپé‡ڈï¼Œه¢‍ه¼؛ç½‘ç«™è؟گèگ¥èƒ½هٹ›ï¼Œه¢‍هٹ ç½‘ç«™و”¶ه…¥م€‚<br>Discuz!ن؛‘ه¹³هڈ°ç›®ه‰چه…چè´¹وڈگن¾›ن؛†QQن؛’èپ”م€پè…¾è®¯هˆ†و‍گم€پç؛µو¨ھوگœç´¢م€پç¤¾هŒ؛QQç¾¤م€پو¼«و¸¸ه؛”ç”¨م€پSOSOè،¨وƒ…وœچهٹ،م€‚Discuz!ن؛‘ه¹³هڈ°ه°†é™†ç»­وڈگن¾›و›´ه¤ڑن¼کè´¨وœچهٹ،é،¹ç›®م€‚<br>ه¼€é€ڑDiscuz!ه¹³هڈ°ن¹‹ه‰چï¼Œè¯·ç،®ن؟‌و‚¨çڑ„ç½‘ç«™ï¼ˆDiscuz!م€پUCHomeوˆ–SupeSiteï¼‰ه·²ç»ڈهچ‡ç؛§هˆ°Discuz!X2.5م€‚',
	'to_install_cloud' => 'هˆ°هگژهڈ°ه¼€é€ڑ',
	'to_index' => 'توجه للرئيسية',

	'init_credits_karma'	=> 'Reputation',//'威望',//!!! The same in install_var.php
	'init_credits_money'	=> 'Points',//'金钱',//!!! The same in install_var.php

	'init_postno0'		=> '#1',//'楼主',//!!! The same in install_var.php 
	'init_postno1'		=> '#2',//'沙发',    //!!! The same in install_var.php
	'init_postno2'		=> '#3',//'板凳',   //!!! The same in install_var.php
	'init_postno3'		=> '#4',//'地板',   //!!! The same in install_var.php

	'init_support'		=> '',//'支持',   //!!! The same in install_var.php
	'init_opposition'	=> '',//'反对',//!!! The same in install_var.php

	'init_group_0'	=> 'Member',//'会员',
	'init_group_1'	=> 'Administrator',//'管理员',
	'init_group_2'	=> 'Super Moderator',//'超级版主',
	'init_group_3'	=> 'Moderator',//'版主',
	'init_group_4'	=> 'R/O Member',//'禁止发言',
	'init_group_5'	=> 'Banned',//'禁止访问',
	'init_group_6'	=> 'IP Banned',//'禁止 IP',
	'init_group_7'	=> 'Guest',//'游客',
	'init_group_8'	=> 'Wait for verification',//'等待验证会员',
	'init_group_9'	=> 'Newbie',//'乞丐',
	'init_group_10'	=> 'Junior',//'新手上路',
	'init_group_11'	=> 'Member',//'注册会员',
	'init_group_12'	=> 'Middle Member',//'中级会员',
	'init_group_13'	=> 'Senior Member',//'高级会员',
	'init_group_14'	=> 'Gold Member',//'金牌会员',
	'init_group_15'	=> 'Veteran',//'论坛元老',

	'init_rank_1'	=> 'Beginner',//'新生入学',
	'init_rank_2'	=> 'Apprentice',//'小试牛刀',
	'init_rank_3'	=> 'Intern',//'实习记者',
	'init_rank_4'	=> 'Freelance writer',//'自由撰稿人',
	'init_rank_5'	=> 'Distinguished Writer',//'特聘作家',

	'init_cron_1'	=> 'Empty today\'s post count',//'清空今日发帖数',
	'init_cron_2'	=> 'Empty this month\'s online time',//'清空本月在线时间',
	'init_cron_3'	=> 'Daily data cleaning',//'每日数据清理',
	'init_cron_4'	=> 'Birthday statistics and e-mail subscriptions',//'生日统计与邮件祝福',
	'init_cron_5'	=> 'Topic reply notifications',//'主题回复通知',
	'init_cron_6'	=> 'Daily bulletin clean up',//'每日公告清理',
	'init_cron_7'	=> 'Time-limited operation clean-up',//'限时操作清理',
	'init_cron_8'	=> 'Promotion messages clean-up',//'论坛推广清理',
	'init_cron_9'	=> 'Monthly topic clean-up',//'每月主题清理',
	'init_cron_10'	=> 'Daily update X-Space users',//'每日 X-Space更新用户',
	'init_cron_11'	=> 'Weekly topic update',//'每周主题更新',

	'init_bbcode_1'	=> 'So that the contents of horizontal scrolling, the effect is similar to the marquee HTML tags, Note: This effect only valid under Internet Explorer browser.',//'使内容横向滚动，这个效果类似 HTML 的 marquee 标签，注意：这个效果只在 Internet Explorer 浏览器下有效。',
	'init_bbcode_2'	=> 'Embedded Flash animation',//'嵌入 Flash 动画',
	'init_bbcode_3'	=> 'Show QQ online status, click to this icon and chat with him/her',//'显示 QQ 在线状态，点这个图标可以和他（她）聊天',
	'init_bbcode_4'	=> 'Superscript',//'上标',
	'init_bbcode_5'	=> 'Subscript',//'下标',
	'init_bbcode_6'	=> 'Embedded Windows media audio',//'嵌入 Windows media 音频',
	'init_bbcode_7'	=> 'Embedded Windows media audio or video',//'嵌入 Windows media 音频或视频',

	'init_qihoo_searchboxtxt'		=> 'Input keywords for quick search this forum',//'输入关键词,快速搜索本论坛',
	'init_threadsticky'			=> 'Stick object: Global top, Category Top, This forum top',//'全局置顶,分类置顶,本版置顶',

	'init_default_style'			=> 'Default Style',//'默认风格',
	'init_default_forum'			=> 'Default Forum',//'默认版块',
	'init_default_template'			=> 'Default template',//'默认模板套系',
	'init_default_template_copyright'	=> 'Sing Imagination (Beijing) Technology Co., Ltd.',//'康盛创想（北京）科技有限公司',

	'init_dataformat'	=> 'Y-m-d',//'Y-n-j',
	'init_modreasons'	=> 'Advertising/SPAM\r\nMalicious/Hacking\r\nIllegal content\r\nOfftopic\r\nRepeated post\r\n\r\nI agree\r\nExcellent article\r\nOriginal content',//'广告/SPAM\r\n恶意灌水\r\n违规内容\r\n文不对题\r\n重复发帖\r\n\r\n我很赞同\r\n精品文章\r\n原创内容',
	'init_userreasons'	=> 'Powerfull!\r\nUsefull\r\nVery nice\r\nThe best!\r\nInteresting',
	'init_link'		=> 'Discuz! Official forum',//'Discuz! 官方论坛',
	'init_link_note'	=> 'To provide the latest Discuz! Product news, software downloads and technical exchanges',//'提供最新 Discuz! 产品新闻、软件下载与技术交流',

	'init_promotion_task'	=> 'Website promotion task',//'网站推广任务',
	'init_gift_task'	=> 'Init Gift Task',//'红包类任务',
	'init_avatar_task'	=> 'Avatar Task',//'头像类任务',

	'license' => '<div class="license"><h1>اتفاقية استخدام سكربت Discuz!</h1>
<center>

لمزيد من المعلومات وللحصول على هاكات وإضافات وشروحات وكل ما يخص ديسكاز <b> قم بزيارة <a href="http://www.discuz.taxiweb.org">ديسكاز العرب</a> <br><br>

حقوق الطبع والنشر (ج) 2001-2012، بكين التي أنشئت حديثا والتكنولوجيا المحدودة جميع الحقوق محفوظة.

<p>شكرا لك على اختيار المنتجاتComsenz . و أخيرا انتهت  جهودنا بنجاح من أجل توفير لكم حل موقع بسرعة وكفاءة، ومنتدى للمجتمع قوي. Comsenz الموقع الرسمي المنتج http://www.comsenz.com  موقع منتدى لhttp://www.discuz.net. </ P>

إشعار <p> لUSER: هذا الاتفاق هو اتفاق قانوني بينك وبين Comsenz عن استخدامك للشركات Comsenz. توفر مجموعة متنوعة من منتجات البرمجيات والخدمات. سواء كنت فردا أو منظمة، ربح أم لا، وكيفية استخدام (بما في ذلك لغرض الدراسة والبحث) ويجب قراءة هذه الاتفاقية بعناية، بما في ذلك الاستبعاد أو الحد من مسؤولية Comsenz شرط الاعفاء، والحق في تقييد الخاص. يرجى مراجعة وقبول أو عدم قبول شروط الخدمة. إذا كنت لا توافق على شروط الخدمة و / أو Comsenz التعديلات، وفي أي وقت، يجب عدم استخدام أو أخذ زمام المبادرة لإلغاء المنتجات سينغ تقديم Comsenz. وإلا، التسجيل الخاص بك من ذات الصلة بالمنتجات Comsenz الهبوط، والخدمات، وتحميل، وعرض استخدام السلوك سوف يعامل كما كنت تقبل تماما شروط الخدمة جميع، بما في ذلك قبول من Comsenz على شروط الخدمة في أي وقت أي تغييرات .
وسيتم نشر <p> هذه الشروط لتغير الخدمة، Comsenz تعديلات على صفحة ويب. مرة واحدة في شروط منقحة من مرحلة الخدمة في إدارة موقع وأعلن أن بديلا فعالا للشروط الأصلية للخدمة. يمكنك دائما زيارة كانغ شنغ قوان وصول المنتدى فانغ إلى أحدث نسخة من شروط الخدمة. إذا اخترت لقبول الشروط، فإنك توافق على الالتزام بالاتفاق مع الظروف. إذا كنت لا توافق على شروط الخدمة، لا يمكنك الحصول على الحق في استخدام هذه الخدمة. إذا كان لديك على مخالفة أحكام هذه المادة، يغني الحق في الشركة تحتفظ لنفسها بالحق في تعليق أو إنهاء الأهلية لاستخدام المنتجات وComsenz وتحتفظ لنفسها الحق في أن التحقيق للمسؤولية القانونية. </ P>
فهم، على موافقة والامتثال لشروط كل من هذه الاتفاقية إلا بعد أن منتجات Comsenz. قد يدخل في آخر اتفاق مكتوب مباشرة مع الشركة سينغ لتكملة أو استبدال كل أو أي جزء من هذا الاتفاق. </ P> </ P>

<p>  كل حقوق الملكية الفكرية لهذا البرنامج. هذا البرنامج هو لاتفاقية الترخيص، لا تباع. Comsenz لا تسمح لك أن تمتثل لأحكام هذا الاتفاق، نسخة، تحميل وتركيب أو استخدام أو غير ذلك من الاستفادة من وظيفة أو حقوق الملكية الفكرية لهذا البرنامج. </ P>

<h3> بروتوكولات اتفاقية الاستخدام<H3 />
<ol>
   <li> يجب أن تمتثل امتثالا تاما لاتفاق ترخيص على أساس البرامج التي تم استخدامها في أغراض غير تجارية، دون الحاجة إلى دفع تكاليف تراخيص البرمجيات حقوق الطبع والنشر. </ li>
   <li> تغني رمز مصدر المنتج (إن وجد) أو أسلوب الواجهة لتتناسب مع متطلبات يمكن تعديل موقعك ضمن قيود وحدود الاتفاق. </ li>
   <li> لديك لاستخدام هذا البرنامج لبناء معلومات عضوية موقع والمقالات والمعلومات حول ملكية والالتزام إلى مراجعة محتوى الموقع، واستخدام هذا البرنامج لبناء واجب مستقل من الرعاية للتأكد من أنها لا تنتهك الحقوق والمصالح المشروعة من أي شخص، تفترض بشكل مستقل كامل المسؤولية عن استخدام Comsenz البرمجيات والخدمات، بسبب Comsenz أو خسارة الزبائن، يجب أن تكون جميع هذه الأضرار. </ li>
   <li> إذا كنت في حاجة Comsenz البرمجيات أو خدمة المستخدمين لأغراض تجارية، يجب الحصول على حدة على إذن خطي من Comsenz، وبعد الحصول على رخصة تجارية، يمكنك استخدام البرنامج لأغراض تجارية، وفقا لنوع الرخصة التي اشتريتها تحديد الفترة من الدعم التقني، وأساليب الدعم الفني والتقنيات اللازمة لدعم المحتوى، ومنذ لحظة الشراء، والدعم التقني خلال الفترة التي يملكها على الوجه المبين في نطاق معين من خدمات الدعم التقني. المستخدمين التجاريين والقدرة على التفكير وطرح وجهات نظرهم والتعليقات ذات الصلة أن يكون الاعتبار الأول، ولكن يجب أن يعتمد أي وعد أو ضمانة. </ li>
   <li> تطبيق خدمات مركز يمكنك توفير من غناء التحميل لتطبيق الويب الخاص بك، ولكن يجب تطبيق مطور / المالك لدفع الرسوم المناسبة. </ li>
</ رأ>

<h3> الثاني من قيود اتفاق والقيود </ H3>
<ol>
   <li> دون الحصول على ترخيص تجاري مكتوب Comsenz، قد لا تكون البرامج المستخدمة لأغراض تجارية (بما في ذلك ولكن لا تقتصر على مواقع الشركات والمواقع التجارية، لأغراض تجارية أو لتحقيق موقع على شبكة الانترنت مربحة). شراء رخصة تجارية، يرجى زيارة تعليمات http://www.discuz.com يمكن أيضا استدعاء 8610-51282255 لمزيد من المعلومات. </ li>
   <li> ليس على ترخيص تجاري من البرمجيات أو المرتبطة الإيجار أو بيعها أو رهنها أو الترخيص من الباطن. </ li>
   <li> في أي حال، بغض النظر عن الغرض، وسواء كانت معدلة أو المناظر الطبيعية، وكيف أن درجة من التعديل، طالما أن كل أو أي جزء من منتجات سينغ، من دون الحصول على إذن خطي من تذييل الصفحة على اسم المنتج Comsenz وComsenz شركة يجب الحفاظ على روابط لمواقع تابعة (http://www.comsenz.com، أو http://www.discuz.net)، ولكن ليس إلى إزالة أو تعديل. </ li>
   <li> ممنوع Comsenz المنتجات في كامل أو أي جزء من أساس لتطوير أي إصدار مشتق، نسخة معدلة أو إصدار طرف ثالث لإعادة التوزيع. </ li>
   <li> تقوم بتحميلها من طلب تطبيق مركز، دون إذن خطي من أصحاب تطوير التطبيقات / قد لا يكون مهندس عكسية، تجميع عكسي، عكس ترجمة، وما إلى ذلك، لا يسمح لنسخ وتعديل وصلة مستنسخة، ترجمة ونشر والنشر، وتطوير المنتجات المشتقة ذات الصلة، والأعمال. </ li>
   إذا <li> لم تتمكن من الامتثال لشروط هذا الاتفاق، سيتم إنهاء الترخيص، الترخيص للحقوق على أن تستأنف في الوقت نفسه، يجب أن تتحمل المسؤوليات القانونية ذات الصلة. </ li>
</ رأ>

<h3> الثالث من الضمان المحدود وإخلاء <H3 />
<ol>
   <li> البرامج والمستندات المصاحبة لها وعدم تقديم أي شكل صريح أو ضمني من التعويض أو الضمان. </ li>
   <li> استخدام المستخدم طوعي من هذا البرنامج، يجب أن نفهم من مخاطر استخدام هذا البرنامج، لم تكن قد اشتريت في خدمة المنتج الفني، ونحن لا تتعهد تقديم أي شكل من أشكال الدعم التقني، واستخدام أمر أو تتحمل أي استخدام لهذا البرنامج الناشئة عن القضايا المتعلقة بالمسؤولية. </ li>
   <li> Comsenz الشركة لا تستخدم هذا البرنامج لبناء المواقع أو المنتديات، والمقالات أو معلومات لتحمل المسؤولية، المسؤولية الكاملة عن مسؤوليتك الخاصة. </ li>
   Comsenz <li> غير قادرة على رصد كامل تحميلها على طلب تطبيق مركز من قبل طرف ثالث، لا تضمن شرعية تطبيق، والأمن، صحة والسلامة أو الجودة؛ قمت بتحميل التطبيق من مركز التطبيقات وافقت لتقييم، وتتحمل جميع المخاطر، بدلا من الاعتماد على في Comsenz. ولكن على أي حال، Comsenz في ذلك الحق في كل أو جزء من القانون لوقف مركز تطبيق واتخاذ الإجراءات المناسبة، بما في ذلك سبيل المثال لا الحصر، وتطبيق ذات الصلة لإلغاء تعليق خدمة للحفاظ على السجلات ذات الصلة لتقرير الجهات ذات العلاقة. تأثير عليك وعلى الخسائر الممكنة، غناء الشركة لا تقوم أية مسؤولية مباشرة أو غير مباشرة أو تبعية. </ li>
   توقيت البرامج والخدمات التي تقدمها <li> سينغ سينغ، والأمن، ودقة لا تضمن، بسبب قوة قاهرة عوامل خارجة عن سيطرة سينغ (بما في ذلك هجمات القراصنة، ووقف السلطة، وغيرها) التي تسببها البرمجيات تعليق أو إنهاء استخدام والخدمات، في حين أن الأضرار التي لحقت لك، فإنك توافق على التنازل عن جميع الحقوق التحقيق مسؤولية الشركات Comsenz. 6. Comsenz على وجه الخصوص أن ألفت انتباهكم إلى من أجل حماية استقلال لتطوير الأعمال والتكيف، وسينغ سينغ الشركة لديها في أي وقت مع أو بدون إشعار مسبق لتعديل الخدمات، وتعليق أو إنهاء استخدام بعض أو كل من البرمجيات والخدمات وسيتم نشر الحق في تعديل في موقع الشركة سينغ على صفحة واحدة سبيل المثال لا الحصر هذه الفقرة. Comsenz ممارسة لتعديل أو وقف الحق في إنهاء بعض أو كل من استخدام البرمجيات وخسائر الخدمة، وComsenz من دون مسؤولية تجاهك أو أي طرف ثالث. </ li>
</ رأ>

<p> لاتفاق Comsenz الترخيص للمستخدم النهائي، وتفاصيل عن منح التراخيص التجارية والخدمات الفنية، وفرت على وجه الحصر من قبل Comsenz. Comsenz والشركة لديها الحق في تعديل اتفاقية الترخيص وقوائم الخدمات دون إخطار مسبق، للاتفاق منقحة أو قائمة الأسعار اعتبارا من تاريخ التغيير من المستخدمين المصرح لهم. </ P>

<p> وبمجرد أن تبدأ في Comsenz تركيب المنتجات، يعتبر التوصل إلى فهم كامل وقبول شروط هذا الاتفاق، في الوقت نفسه يحق للشروط المذكورة أعلاه من الحقوق التي يمنحها المعوقات والقيود. اتفاق ما وراء سلوك مسموح به، سيكون انتهاكا مباشرا لاتفاقية الترخيص، ويشكل انتهاكا لحقوق النشر، لدينا الحق في أي وقت أن ينهي ترخيص، يجب أن أمرت لوقف هذا الضرر، والإبقاء على القوى مسؤولة. </ P>

<p> هذا الترخيص شروط، والتفسير، صحة والخلافات تحل، عن الجمهورية الشعبية من القانون البر الرئيسى للصين. </ P>

<p> إذا وComsenz في حال وجود أي نزاع أو خلاف، ينبغي أولا أن تسوى من خلال المشاورات الودية، والتشاور فشل، فإنك توافق على عرض النزاع أو الخلاف Comsenz موقع اختصاص محكمة الشعب في حى هايديان. Comsenz الشركة لديها الحق في تفسير والحق في تعديل شروط أعلاه. </ P>




</center>
<p align="center">"NbDiZed"تم التعريب بواسطة نذير </p>

</div>',

	'uc_installed'		=> 'لقد قمت بتثبيت UCenter. اذا كنت تحتاج الى إعادة التثبيت, إحذف ملف  data/install.lock ',//'您已经安装过 UCenter，如果需要重新安装，请删除 data/install.lock 文件',
	'i_agree' => 'أنا أوافق على الشروط',
	'supportted' => 'مدعومة',
	'unsupportted' => 'غير مدعومة',
	'max_size' => 'الحجم الأقصى',
	'project' => 'المشروع',
	'ucenter_required' => 'Discuz! متطلبات',
	'ucenter_best' => 'Discuz! المثلى',
	'curr_server' => 'الخادم ',
	'env_check' => 'التحقق من الخادم',
	'os' => 'المستضيف',
	'php' => 'PHP',
	'attachmentupload' => 'تحميل المرفقات',
	'unlimit' => 'لا نهائي',
	'version' => 'الإصدار',
	'gdversion' => 'GD مكتبة',
	'allow' => 'السماح لـ',
	'unix' => 'اليونيكس',
	'diskspace' => 'مساحة القرص',
	'priv_check' => 'التحقق من الملفات اللازمة',
	'func_depend' => 'التحقق من الدوال اللازمة',
	'func_name' => 'الدوال الواجب دعمها',
	'check_result' => 'التحقق من النتائج',
	'suggestion' => 'إقتراحات',
	'advice_mysql'		=> 'الرجاء تفحص بأن موديل mysql  يعمل حالياً',//'请检查 mysql 模块是否正确加载',
	'advice_fopen'		=> 'يجب هذه الدالة <b>allow_url_fopen</b> أن تكون مفعلة <b>في</b> ملف php.ini. الرجاء مراسلة صاحب الإستضافة لحل هذه المشكلة.',//'该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_file_get_contents'	=> 'هذه الدالة  <b>allow_url_fopen</b> يجب أن تكون مفعلة  <b>في</b> ملف php.ini. الرجاء مراسلة الإستضافة لحل هذه المشكلة.',//'该函数需要 php.ini 中 allow_url_fopen 选项开启。请联系空间商，确定开启了此项功能',
	'advice_xml'			=> 'يجب دعم دالة  PHP support for XML. راسل صاحب الاستضافة لحل المشكلة.',//'该函数需要 PHP 支持 XML。请联系空间商，确定开启了此项功能',
	'none' => 'لا شيئ',

	'dbhost' => 'عنوان الخادم',
	'dbuser' => 'اسم المستخدم',
	'dbpw' => 'كلمة سر قاعدة البيانات',
	'dbname' => 'إسم قاعدة البيانات',
	'tablepre' => 'بادئة الجداول',

	'ucfounderpw'		=> 'كلمة مرور مدير UCenter ',//'创始人密码',
	'ucfounderpw2'		=> 'أعد كلمة المرور',//'重复创始人密码',

	'init_log' => 'حروف السجل',
	'clear_dir'		=> 'مسح الدليل',//'清空目录',
	'select_db' => 'إختيار قاعدة بيانات',
	'create_table' => 'إنشاء الجداول',
	'succeed' => 'تم بنجاح ',

	'install_data' => 'تنصيب المعلومات',
	'install_test_data' => 'تنصيب معلومات تجريبية ',

	'method_undefined' => 'الطريقة غير معروفة',
	'database_nonexistence' => 'قاعدة البيانات غير موجودة',
	'skip_current' => 'تخطى الحالي',
	'topic' => 'الموضوع',
	'install_finish' => 'تم الإنتهاء من التنصيب بنجاح , إضغط هنا للدخول للمنتدى',

);

$msglang = array(
	'config_nonexistence' => 'ملف config.inc.php غير موجود, غير قادر على متابعة التثبيت، الرجاء استخدام بروتوكول نقل الملفات لتحميل الملف وحاول مرة أخرى.',
);

?>