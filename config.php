<?php
define("APP_PATH",dirname(__FILE__));
define("JWCOM_PATH",APP_PATH."/include");
@date_default_timezone_set('PRC');
$jwcomConfig = array(

'db' => array(
'host' => '127.0.0.1',			//数据库地址
'port' => 3306,					//数据库端口
'database' => 'M1008',		//数据库名
'login' => 'root',				//数据库帐号
'password' => '123123',			//数据库密码
'prefix' => 'jw_',				//数据库表前缀
),

'ext' => array(
'version' => '3.3',
'update' => '20150508',
'auto_update' => 1,
'http_path' => 'http://www.lala.wang',
'site_title' => '米表CMS,PHP米表程序,html5米表源码,PHP域名销售程序',
'site_keywords' => '域名管理系统,米表CMS,米表程序,米表源码',
'site_description' => '欢迎访问 www.lala.wang 下载高端网站模板...',
'secret_key' => '1d0459f842860e38d55a10afe9959f3a',	//站内安全密钥，安装时会随机生成，一旦生成请勿修改，并请牢记，否则可能造成某些数据无法取回。
'site_comtitle' => '米表网',
'site_phone' => '4000-000-000',
'site_comemail' => 'admin@lala.wang',
'site_address' => '四川省',
'site_combeian' => '蜀ICP备12000000号',
'site_jwcdnapi' => '',
'view_themes' => 'default',
'site_html' => 0,
'site_html_dir' => 'html',
'site_html_rules' => '[mold]/[file].html',
'site_html_suffix' => '.html',
'site_html_index' => 0,
'enable_gzip' => 1,
'enable_gzip_level' => 6,
'cache_auto' => 1,
'cache_time' => 0,
'filetype' => 'jpg,gif,jpeg,bmp,png,swf,flv,wmv,wma,mp3,mp4,rar,zip,7z,txt,doc,docx,xls,xlsx',
'filesize' => 10485760,
'imgwater' => 0,
'imgwater_t' => 3,
'imgcaling' => 0,
'img_w' => 800,
'img_h' => 800,
'comment_audit' => 1,
'comment_user' => 0,
),
);