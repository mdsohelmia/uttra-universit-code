<?php
// super global array or variable.
//$_POST
//$_GET
//$_REQUEST
include './helper.php';

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$password = $_POST['password'];

$profile = $_FILES['profile_pic'];

$file_original_name = $profile['name'];
dd(file_name_generator($file_original_name));

if (file_exists('database.text')) {

} else {
    if (! file_exists('database/next.text')) {
        mkdir('database');
        touch('database/next.text');
    }

    touch('databse.text');
}




