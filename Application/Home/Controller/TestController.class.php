<?php
/**
 * Created by PhpStorm.
 * User: xinxiyun
 * Date: 2018/7/15
 * Time: 下午9:59
 */

namespace Home\Controller;

use Think\Controller;


class TestController extends Controller
{
    public function test(){
        $db_user = M ('user')->select();
//        dump($db_user);
        if($db_user){
            foreach ($db_user as $user){
                echo $user['user'].'---'.$user['password']."\n";
            }
        }else{
            echo 'no connect, sorry';
        }
    }
}