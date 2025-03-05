<?php
/**
 * Created by PhpStorm.
 * User: xinxiyun
 * Date: 25_03_05
 * Time: 4:01 PM
 */

namespace Home\Controller;


use Think\Controller;

class SnakeController extends Controller
{
    public function view(){
        $this->display('snake');
    }
}