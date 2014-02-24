<?php
if (!defined("HDPHP_PATH"))exit('No direct script access allowed');
//更多配置请查看hdphp/Config/config.php
return array(
	"DB_HOST"                       => "localhost", //数据库连接主机  如127.0.0.1
    "DB_PORT"                       => 3306,        //数据库连接端口
    // "DB_USER"                       => "anusr_2",      //数据库用户名
    // "DB_PASSWORD"                   => "ce4sxi7",          //数据库密码
    // 
    // 
    // new database 
    // "DB_USER"                       => "anux_usr",      //数据库用户名
    // "DB_PASSWORD"                   => "c3reapeT",          //数据库密码
    // "DB_DATABASE"                   => "anxinchina",          //数据库名称

    
    "DB_USER"                       => "root",      //数据库用户名
    "DB_PASSWORD"                   => "",          //数据库密码
    "DB_DATABASE"                   => "anxchinadb",          //数据库名称
    
    "DB_PREFIX"                     => "ax_",          //表前缀
    "DB_FIELD_CACHE"                => 1,           //字段缓存


    "AUTO_LOAD_FILE"                => "common",          //自动加载应用Lib目录或应用组Common/Lib目录下的文件
    "SESSION_NAME"                  => "anxinsid",     //session_name
    "SESSION_ENGINE"                => "mysql",      //引擎:file,mysql,memcache
    "SESSION_TABLE_NAME"            => "ax_session",   //SESSION的表名

    "DATA_CACHE_TIME"				=> 600,				//数据缓存时间

    // 分頁
    "PAGE_VAR"                      => "p",      //分页GET变量
    "PAGE_ROW"                      => 10,          //页码数量
    "PAGE_SHOW_ROW"                 => 2,          //每页显示条数
    "PAGE_STYLE"                    => 2,           //页码风格


     /********************************表单TOKEN令牌********************************/
    "TOKEN_ON"                      => 1,           //令牌状态
    "TOKEN_NAME"                    => "__TOKEN__", //令牌的表单name


    // 文件上传
    "UPLOAD_PATH"                   => ROOT_PATH . "/Public/upload", //上传路径
    
);
?>