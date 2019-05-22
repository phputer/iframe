<?php
namespace core\lib;
use core\lib\conf;

class model extends \Medoo\Medoo {
    public function __construct() {
        $config = conf::all('database');
        parent::__construct($config);
    }
}
