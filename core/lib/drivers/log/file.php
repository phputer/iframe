<?php

namespace core\lib\drivers\log;

use core\lib\conf;

class file {
    public $path;

    public function __construct() {
        $options = conf::get('OPTION', 'log');
        $this->path = $options['path'];
    }

    public function log($data, $file = 'log') {
        $logDir = $this->path . date('Y-m-d') . '/';
        if (!is_dir($logDir)) {
            mkdir($logDir, '0777', true);
        }
        $data = date('Y-m-d H:i:s') .PHP_EOL. json_encode($data) . PHP_EOL;
        return file_put_contents($logDir . $file . '.log',$data, FILE_APPEND);
    }
}
