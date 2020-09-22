<?php
define('DNS', 'mysql:host=localhost;');
define('DB_NAME', 'uu_k');
define('USER', 'root');
define('PASSWORD', '');

$pdo = new PDO(DNS."dbname=".DB_NAME, USER, PASSWORD);