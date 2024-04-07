<?php
session_start();
require_once 'config.php'; // Database configuration file

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $avatar = $_FILES["avatar"]["name"];

    // Check if user exists in database
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(empty($user))
    {
        // File Upload
        $targetDirectory = "../uploads/";
        $targetFile = $targetDirectory . basename($_FILES["avatar"]["name"]);
        copy($_FILES["avatar"]["tmp_name"], $targetFile);

        // Insert user into database
        $sql = "INSERT INTO users (firstname, lastname, username, password, avatar) VALUES (:firstname, :lastname, :username, :password, :avatar)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':avatar', $avatar);
        $saved = $stmt->execute();
        if($saved)
        {
            $_SESSION["success"] = "User registered successfully. Please login with your username and password!";
            header("Location: ../index.php");
        }
        else
        {
            $_SESSION["error"] = "Error registering user.";
            header("Location: ../index.php");
        }
    }
    else
    {
        $_SESSION["error"] = "Username already exists, please use another username and try again!";
        header("Location: ../registration.php");
    }
}
?>
