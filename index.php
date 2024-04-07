<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="margin: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6" style="border: 1px solid #ddd;">
                <h3 style="margin:15px;">Simple Registration & Login System</h3>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-sm-4 col-md-4 col-lg-4 text-right">
                <a href="registration.php" class="btn btn-primary">Register</a>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 text-left">
                <a href="login.php" class="btn btn-success">Login</a>
            </div>
        </div>
        <div class="row col-md-12 justify-content-center">
            <br>
            <h6 class="text-success"><?php if(isset($_SESSION["success"])){ echo $_SESSION["success"]; unset($_SESSION["success"]); } ?></h6>
            <h6 class="text-danger"><?php if(isset($_SESSION["error"])){ echo $_SESSION["error"]; unset($_SESSION["error"]); } ?></h6>
        </div>
    </div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
