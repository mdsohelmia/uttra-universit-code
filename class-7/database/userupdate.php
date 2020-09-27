<?php
require_once __DIR__.'./connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$id = $_POST['id'];
$pdo = dbConnect();

$sql = 'UPDATE users SET `name` = :name ,`email` =:email  WHERE id =:id;';

$stm = $pdo->prepare($sql);

$stm->bindParam('name', $name);
$stm->bindParam('email', $email);
$stm->bindParam('id', $id);

$stm->execute();

header('Location: ../view/user.php');


