<?php

define('APP', realpath(__DIR__ . '/../'));
define('APP_NAME', 'app');
define('APP_PATH', APP . '/' . APP_NAME);
define('APP_CORE', APP . '/core');
define('APP_DEBUG', true);

// 加载composer
require (APP . '/vendor/autoload.php');

//加载公共函数库
require (APP . '/core/common/function.php');

// 引入app.php
require ('app.php');

//设置autoload
spl_autoload_register('\core\app::load');
