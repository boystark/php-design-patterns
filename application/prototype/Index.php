<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:54
 */

namespace app\prototype;


class Index
{
    public function __construct()
    {
        $pro_one = new Prototype();
        $pro_two = clone $pro_one;
        $pro_one->show();
        $pro_two->show();
    }

}