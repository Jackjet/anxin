<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
	"DB_HOST"                       => "localhost", //数据库连接主机  如127.0.0.1
    "DB_PORT"                       => 3306,        //数据库连接端口
    "DB_DATABASE"                   => "anxchinadb",          //数据库名称
    // 旧数据库 2013-07前
    // "DB_USER"                       => "anusr_2",      //数据库用户名
    // "DB_PASSWORD"                   => "ce4sxi7",          //数据库密码
    
    // 本地测试
    "DB_USER"                       => "root",      //数据库用户名
    "DB_PASSWORD"                   => "",          //数据库密码
    
    // 
    // 新数据库
    // "DB_USER"                       => "anux_usr",      //数据库用户名
    // "DB_PASSWORD"                   => "c3reapeT",          //数据库密码
    // "DB_DATABASE"                   => "anxinchina",          //数据库名称


    "DB_PREFIX"                     => "ax_",          //表前缀


    "AUTO_LOAD_FILE"                => "common",          //自动加载应用Lib目录或应用组Common/Lib目录下的文件
    "SESSION_NAME"                  => "anxinsid",     //session_name

    "DATA_CACHE_TIME"				=> 600,				//数据缓存时间
    "LANGUAGE"                      => "tw",          //语言包

    // session保存位置
    "SESSION_SAVE_PATH"             => ROOT_PATH.'/Public/session',          //以文件处理时的位置
    // "SESSION_ENGINE"                => "mysql",      //引擎:file,mysql,memcache
    // "SESSION_TABLE_NAME"            => "ax_session",   //SESSION的表名
    
    "DEBUG_SHOW"                    => 0,//为TRUE时显示DEBUG信息否则显示按钮
    "SHOW_ERROR"                    => 0,           //NOTICE错误
);
?>