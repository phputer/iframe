<?php
namespace core\lib;

class log {
    static $class;
    /**
     * 1.确定日志存储方式
     * 2.写日志
     */
    public static function init() {
        $driver = conf::get('DRIVER','log');
        $class = '\core\lib\drivers\log\\'.$driver;
        self::$class = new $class;
    }

    public static function log($name, $file = 'log') {
        self::$class->log($name, $file);
    }
}
