<?php include_once '../partials/nav.php' ?>

<?php
require_once '../database/userdb.php';

?>

    <div class="container-fluid">
        <div class="row">
            <?php require_once '../partials/sidebar.php' ?>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <h2>User List</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>photo</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($users as $key => $user) : ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $user['name'] ?></td>
                                <td><?php echo $user['email'] ?></td>
                                <td><?php echo $user['photo'] ?></td>
                                <td>
                                    <a href="useredit.php?id=<?php echo $user['id'] ?>" class="btn btn-info">Edit</a>
                                    <a href="../database/userdelet.php?id=<?php echo $user['id'] ?>"
                                       class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
<? include_once '../partials/footer.php' ?>