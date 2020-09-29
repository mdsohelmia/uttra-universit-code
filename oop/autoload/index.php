<?php



require_once __DIR__.'/vendor/autoload.php';

use App\Cat;
use App\Controller\AnimaleController;

// var_dump(new Dog, new Cat);

$con = new AnimaleController;

$con->show();
