<?php

use App\Cat;

require_once __DIR__.'/vendor/autoload.php';

//$cat = new Cat();
////
////
//$cat->canEat();
//
//$cat->run();
//
////Cat::sleep();
$msql = new \App\MysqlConnection();

$oracall = new \App\OracallConnection();

$db = new \App\DB($msql);

echo "<br/>";

$db->find('users',3);





