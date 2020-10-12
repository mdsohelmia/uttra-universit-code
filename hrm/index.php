<?php
require_once __DIR__.'./vendor/autoload.php';
echo "ok";

use Nehal\Employee;

use Nehal\Db\User;
use Nehal\Db\Employee as EmployeeModel;

var_dump(new Employee());

var_dump(new EmployeeModel());

var_dump(new User());
