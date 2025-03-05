<?php
/**
 * Created by PhpStorm.
 * User: xinxiyun
 * Date: 25_03_05
 * Time: 4:01 PM
 */

namespace Home\Controller;


use Think\Controller;

class TankController extends Controller
{
    public function view(){
        $this->display('tank');
    }
}