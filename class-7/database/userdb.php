<?php

include_once __DIR__.'./connection.php';
include_once __DIR__.'./../helper.php';

$pdo = dbConnect();

$smt = $pdo->query('SELECT * FROM users');

$users = $smt->fetchAll(PDO::FETCH_ASSOC);

//$stm = $pdo->prepare("SELECT * FROM users where id=:id");
//$stm->bindParam('id', $id);

//$stm->execute();
//$user = $stm->fetch(PDO::FETCH_ASSOC);

//header('Location: user.php');





//dd($_GET['id']);

