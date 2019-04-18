<?php
/**
 * Created by PhpStorm.
 * User: workman
 * Date: 2019/4/18
 * Time: 9:51
 */

define('ROOT',__DIR__);
define('DESIGN','prototype');


require_once ROOT."/application/autoload.php";

(new \app\App())->run(DESIGN);
