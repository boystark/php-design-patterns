<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:11
 */

namespace app\singleton;


class Index
{
    public function __construct()
    {
        Singleton::getInstance();
    }

}