<?php

namespace core;
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Container\Container;

class app {
    public static $classMap = array();
    private $assign = array();

    public static function start() {
        self::initDb();
        self::initDebug();
        self::initLog();
        self::initRoute();
    }

    public static function initDb() {
        $capsule = new Capsule;

        $capsule->addConnection([
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'database',
            'username'  => 'root',
            'password'  => 'password',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);

        // Make this Capsule instance available globally via static methods... (optional)
        $capsule->setAsGlobal();

        // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
        $capsule->bootEloquent();
    }

    public static function initLog() {
        \core\lib\log::init();
    }

    public static function initDebug() {
        if(APP_DEBUG) {
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
            ini_set('display_errors','On');
        } else {
            ini_set('display_errors','Off');
        }
    }

    public static function initRoute() {
        $route = new \core\lib\route();
        $ctrlName = $route->ctrl;
        $action = $route->action;

        $ctrlFile = APP_PATH . '/controllers/'.$ctrlName.'.php';
        $ctrlClass = '\\'.APP_NAME.'\controllers\\'.$ctrlName;
        if(is_file($ctrlFile)) {
            include $ctrlFile;
            $ctrl = new $ctrlClass;
            $ctrl->$action();
        } else {
            p('找不到控制器：'.$ctrlClass);
        }
    }

    public static function load($class) {
        //$class = '\core\route'
        if(isset($class[$class])) {
            return true;
        }

        $class = str_replace('\\', '/', $class);
        $file = APP.'/'.$class.'.php';

        if(is_file($file)) {
            include $file;
            self::$classMap[$class] = $class;
        } else {
            return false;
        }
    }

    public function assign($name, $value) {
        $this->assign[$name] = $value;
    }

    //http://www.w3school.com.cn/php/func_array_extract.asp
    public function display($file) {
        $fileArr = explode('/', $file);
        $templateFile = APP_PATH . '/views/' .$file;
        if(is_file($templateFile)) {
            $loader = new \Twig_Loader_Filesystem(APP_PATH . '/views/' . $fileArr[0]);
            $twig = new \Twig_Environment($loader, array(
                'cache' => APP . '/log/twig',
                'debug' => APP_DEBUG
            ));
            try {
                $template = $twig->load($fileArr[1]);
                echo $template->render($this->assign ? $this->assign : []);
            } catch (\Exception $e) {
                p($e->getMessage());
            }
        } else {
            die("Unable to find template {$file}");
        }
    }
}