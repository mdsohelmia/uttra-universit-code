<?php
define('DNS', 'mysql:host=localhost;');
define('DB_NAME', 'uu_k');
define('USER', 'root');
define('PASSWORD', '');

function dbConnect()
{
    return new PDO(DNS."dbname=".DB_NAME, USER, PASSWORD,[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
}