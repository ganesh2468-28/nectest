<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Registration</h1>
        <form action="functions/register.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" class="form-control" id="firstname" name="firstname" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" class="form-control-file" id="avatar" name="avatar" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="row col-md-12 text-center">
            <h6 class="text-danger"><?php if(isset($_SESSION["error"])){ echo $_SESSION["error"]; unset($_SESSION["error"]); } ?></h6>
        </div>
    </div>
</body>
</html>
