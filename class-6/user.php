<?php
session_start();
require_once '../class-5/helper.php';
require_once './connection.php';
$data = $pdo->query('SELECT name ,email,photo FROM users;');
$users = $data->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>
<table border style="width: 300px; border: 1px solid red">
    <a href="reg.php"
       style=" width:40px;display: block; background: pink; padding: 10px; border-radius: 2px; margin-bottom: 10px;">create</a>
    <tr>
        <th>Nmae</th>
        <th>Email</th>
        <th>photo</th>
    </tr>

    <?php foreach ($users as $key => $user) { ?>
        <tr>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td>
                <img width="100" height="100" src="./upload/<?php echo $user['photo'] ?>" alt="">
            </td>
        </tr>
    <?php }; ?>

    <?php if (isset($_SESSION['success'])) { ?>
        <h1><?php echo $_SESSION['success'] ?></h1>
    <?php } ?>

    <?php unset($_SESSION['success']); ?>

</table>


<?php //foreach ($users as $key => $user): ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $user['name'] ?><!--</td>-->
<!--        <td>--><?php //echo $user['email'] ?><!--</td>-->
<!--        <td>--><?php //echo $user['photo'] ?><!--</td>-->
<!--    </tr>-->
<?php //endforeach; ?>
</body>
</html>