<?php
namespace core\lib;
use core\lib\conf;
class route {
    public $ctrl;
    public $action;

    public function __construct() {
        if(isset($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/') {
            $path = $_SERVER['REQUEST_URI'];
            $pathArr = explode('/', trim($path, '/'));
            if(isset($pathArr[0])) {
                $this->ctrl = ucfirst($pathArr[0]);
                unset($pathArr[0]);
            }
            if(isset($pathArr[1])) {
                $this->action = $pathArr[1].'Action';
                unset($pathArr[1]);
            } else {
                $this->action = $pathArr[0];
            }
            $count = count($pathArr);
            $i = 2;
            while ($i < $count + 2) {
                if(isset($pathArr[$i+1])) {
                    $_GET[$pathArr[$i]] = $pathArr[$i+1];
                }
                $i = $i + 2;
            }
        } else {
            $this->ctrl = conf::get('CTRL','route');
            $this->action = conf::get('ACTION','route') . 'Action';
        }
    }
}