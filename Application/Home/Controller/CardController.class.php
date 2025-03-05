<?php
/**
 * Created by PhpStorm.
 * User: xinxiyun
 * Date: 25_03_05
 * Time: 3:05 PM
 */

namespace Home\Controller;


use Think\Controller;

class CardController extends Controller
{
    private $_deck = [
        'c2', 'c3', 'c4', 'c5', 'c6', 'c7', 'c8', 'c9', 'ct', 'cj', 'cq', 'ck', 'ca',
        'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd8', 'd9', 'dt', 'dj', 'dq', 'dk', 'da',
        'h2', 'h3', 'h4', 'h5', 'h6', 'h7', 'h8', 'h9', 'ht', 'hj', 'hq', 'hk', 'ha',
        's2', 's3', 's4', 's5', 's6', 's7', 's8', 's9', 'st', 'sj', 'sq', 'sk', 'sa'
    ];

    public function shuffleDeck(){
        for($i=0; $i<count($this->_deck)-1;$i++){
            $j = mt_rand(0, count($this->_deck));
            $temp = $this->_deck[$i];
            $this->_deck[$i] = $this->_deck[$j];
            $this->_deck[$j] = $temp;
        }
        echo json_encode($this->_deck, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL;
    }


}