<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:55
 */

namespace app\prototype;


class Prototype
{

    private $point = [];
    private $arr = [];

    public function __construct()
    {
        for($i=0;$i<999;$i++){
            $this->point = [rand(1,999),rand(1,999)];
            array_push($this->arr,$this->point);
        }
        $this->point = [];
    }

    public function show(){
        var_dump($this->arr);
        $this->arr = [];
    }
}