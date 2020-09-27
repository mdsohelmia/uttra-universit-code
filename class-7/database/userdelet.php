<?php
require_once './connection.php';
$pdo = dbConnect();
$id = '';
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
}
$stm = $pdo->prepare('DELETE FROM users WHERE id = :id');
$stm->bindParam('id', $id);
$stm->execute();
header('Location: ./../view/user.php');