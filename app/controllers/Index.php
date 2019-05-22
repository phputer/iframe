<?php

namespace app\controllers;
use User;

class Index extends \core\app {

    public function indexAction() {
        $data = 'Hello world!';
        $this->assign('data', $data);
        $this->display('Index/index.html');
    }

    public function ormAction() {
        $user = User::find(1);

    }
}