<?php
function dd($vars)
{
    echo '<pre>';
    echo '<div style="background: black; color: #ffffff;font-size: 23px; font-weight: bold;padding: 10px;" >';
    var_dump($vars);
    echo '</div>';
    echo '</pre>';
    exit();
}

function file_name_generator(string $file_name)
{
    $explode = explode('.', $file_name);

    $file_ext = end($explode);

    return $randome_file_name = uniqid('profile_pic', strtotime(date('y-m-d'))).'.'.$file_ext;
}