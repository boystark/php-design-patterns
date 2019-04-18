<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:01
 */
spl_autoload_register(function ($class){

    $path = ROOT.'\\'.str_replace('app','application',$class).'.php';
    if(is_file($path)){
        include $path;
    };
});
