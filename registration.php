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
        <form id="registrationForm" action="functions/register.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="firstname">First Name: <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="firstname" name="firstname" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name: <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="username">Username: <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="password">Password: <span class="text-danger">*</span></label>
                <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="avatar">Avatar: <span class="text-danger">*</span></label>
                <input type="file" class="form-control-file" id="avatar" name="avatar" autocomplete="off" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        <div class="row col-md-12 text-center">
            <h6 class="text-danger"><?php if(isset($_SESSION["error"])){ echo $_SESSION["error"]; unset($_SESSION["error"]); } ?></h6>
        </div>
    </div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- jQuery Validation plugin -->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#registrationForm').validate({
                rules: {
                    firstname: {
                        required: true,
                        minlength: 2
                    },
                    lastname: {
                        required: true,
                        minlength: 2
                    },
                    username: {
                        required: true,
                        minlength: 5
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    avatar: {
                        required: true,
                        extension: "jpg|jpeg|png"
                    }
                },
                messages: {
                    firstname: {
                        required: "Please enter your first name",
                        minlength: "Your first name must be at least 2 characters long"
                    },
                    lastname: {
                        required: "Please enter your last name",
                        minlength: "Your last name must be at least 2 characters long"
                    },
                    username: {
                        required: "Please enter your username",
                        minlength: "Your username must be at least 5 characters long"
                    },
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 6 characters long"
                    },
                    avatar: {
                        required: "Please select an avatar",
                        extension: "Please select a valid image file (jpg, jpeg, or png)"
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
</body>
</html>
