<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model {
    use SoftDeletes;

    protected $table = 'user';
    public $timestamps = false;

    public function orm3() {
        $user = self::query()->find(1);
        $user->name = '张三';
    }

}