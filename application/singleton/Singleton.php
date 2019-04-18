<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:52
 */

namespace app\singleton;


class Singleton
{
    private static $instance;

    private function __construct()
    {
        echo "\n 懒汉式单例 \n";//不支持饿汉式单例
    }

    public static function getInstance():self {
        if(!self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }
}