<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoadBalance
 *
 * @author lhf
 */
class LoadBalance {
    
    public static $ips = [
        '192.168.0.1',
        '192.168.0.2',
        '192.168.0.3',
        '192.168.0.4',
        '192.168.0.5',
        '192.168.0.6',
        '192.168.0.7',
        '192.168.0.8',
        '192.168.0.9',
    ];
    
    /**
     * 随机算法
     */
    public function random(){
        return array_rand(self::$ips, 1);
    }
    
}
