<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 10:22
 */

namespace app;


class App
{
    public function run(string $flg = DESIGN):void {
        $index = "\app\\".$flg."\\Index";
        new $index();
    }
}