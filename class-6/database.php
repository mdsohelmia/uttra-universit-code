<?php
$name = ['success' => 'data create'];
session_start();
require_once '../class-5/helper.php';
require_once './connection.php';
$errors = [];
$name = $_POST['name'];
$email = strtolower(trim($_POST['email']));
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$c_password = $_POST['c_password'];
$file = $_FILES['photo'];
$file_name = file_name_generator($file['name']);
$file_type = explode('/', $file['type']);

$support_ext = ['png'];
if (in_array(end($file_type), $support_ext)) {
    move_uploaded_file($file['tmp_name'], "upload/{$file_name}");
} else {
    $errors['file'] = 'File type not support '.end($file_type);
}

if (! empty($name) === false) {
    $errors ['name'] = 'Name is required';
}
$db_query = "INSERT INTO users(`name`, `email`, `password`,`photo`) VALUES('$name', '$email', '$password','$file_name');";

$pdo->query($db_query);

$_SESSION['success'] = 'Data create';
$_SESSION['errors'] = $errors;
header('Location: user.php');




