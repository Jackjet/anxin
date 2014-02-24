<?php
// .-----------------------------------------------------------------------------------
// |  Software: [HDPHP framework]
// |   Version: 2013.01
// |      Site: http://www.hdphp.com
// |-----------------------------------------------------------------------------------
// |    Author: 向军 <houdunwangxj@gmail.com>
// | Copyright (c) 2012-2013, http://houdunwang.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------
// |   License: http://www.apache.org/licenses/LICENSE-2.0
// '-----------------------------------------------------------------------------------

/**
 * 日志处理类
 * @package     Core
 * @author      后盾向军 <houdunwangxj@gmail.com>
 */
class Log
{

    static $log = array();

    /**
     * 记录日志内容
     * @param string $message 内容
     * @param int $logType 类型
     */
    static public function set($message, $logType = 2)
    {
//        $type = substr(FriendlyErrorType($logType), 2);
        if (DEBUG or !C("LOG_SAVE"))
            return;
//        if (in_array($type, array_change_value_case(C("LOG_TYPE"), 1))) {
        $date = date("y-m-d h:i:s");
        self::$log[] = $message . "\t[Time]" . $date . "\r\n";
//        }
    }

    /**
     * 存储日志内容
     * @access public
     * @param int $type 处理方式
     * @param string $destination 日志文件
     * @param type $extraHeaders 额外信息（发送邮件）
     * @return void
     */
    static public function save($type = 3, $destination = NULL, $extraHeaders = NULL)
    {
        if (DEBUG || !C("LOG_SAVE") || empty(self::$log))
            return;

        if (is_null($destination)) {
            $destination = LOG_PATH . date("Y-m-d") . '-' . substr(md5(C("LOG_KEY")), 0, 5) . ".log";
        }
        if ($type == 3) {
            if (is_file($destination) && filesize($destination) > C("LOG_SIZE")) {
                rename($destination, dirname($destination) . "/" . time() . ".log");
            }
        }
        error_log(implode("", self::$log), $type, $destination, $extraHeaders);
    }

    /**
     * 写入日志内容
     * @access public
     * @param string $message       日志内容
     * @param int $type             处理方式
     * @param string $destination   日志文件
     * @param null $extraHeaders
     * @return void
     */
    static public function write($message, $type = 3, $destination = NULL, $extraHeaders = NULL)
    {
        if (DEBUG || !C("LOG_SAVE"))
            return;
        Dir::create(LOG_PATH);
        if (is_null($destination)) {
            $destination = LOG_PATH . date("Y-m-d") . '-' . substr(md5(C("LOG_KEY")), 0, 5) . ".log";
        }

        if ($type == 3) {
            if (is_file($destination) && filesize($destination) > C("LOG_SIZE")) {
                rename($destination, dirname($destination) . "/" . time() . ".log");
            }
        }
        $now = date("Y-m-d h:i:s");
        $message = $now . "\t" . $message . "\r\n";
        error_log($message, $type, $destination, $extraHeaders = null);
    }

}