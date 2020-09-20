<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Html form & php</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="card p-2" style="margin-top: 200px;">
        <div class="card-header">From</div>

        <div class="card-body">
            <form action="form.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Full Name</label>
                    <input name="full_name" type="text" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">phone</label>
                    <input class="form-control" type="number" name="phone_number">

                    <div class="form-group form-check">
                        <input type="checkbox" name="remember" value="true" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                    </div>

                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender1"
                           value="female" checked>
                    <label class="form-check-label" for="gender1">
                        female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender2"
                           value="male">
                    <label class="form-check-label" for="gender2">
                        male
                    </label>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">about me</label>
                    <textarea class="form-control" name="about" rows="5" cols="100"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Profile</label>
                    <input name="profile_pic" type="file" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="inputState">country</label>
                    <select id="inputState" class="form-control" name="country">
                        <option value="Bangladesh" selected>Bangladesh</option>
                        <option value="idian">Idian</option>
                        <option value="Pakistan">Pakistan</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>