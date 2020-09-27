<?php include_once __DIR__.'./../partials/nav.php' ?>
<?php
include_once '../database/connection.php';
if (isset($_GET['id'])) {
    $pdo = dbConnect();
    $stm = $pdo->prepare("SELECT * FROM users where id=:id");
    $stm->bindParam('id', $_GET['id']);
    $stm->execute();
    $user = $stm->fetch(PDO::FETCH_ASSOC);
}
?>

    <div class="container-fluid">
        <div class="row">
            <?php require_once __DIR__.'./../partials/sidebar.php' ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <form action="../database/userupdate.php" class="card py-2 px-4" style="margin-top: 100px;"
                      method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value="<?php echo $user['name'] ?>" name="name" type="text" class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input value="<?php echo $user['email'] ?>" name="email" type="email" class="form-control"
                               id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">photo</label>
                        <input name="photo" type="file" class="form-control" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </main>
        </div>
    </div>
<? include_once __DIR__.'./../partials/footer.php' ?>