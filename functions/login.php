<?php
session_start();
require_once 'config.php'; // Database configuration file

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Check if user exists in database
    $sql = "SELECT * FROM users WHERE username = :username";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!empty($user) && password_verify($_POST["password"], $user["password"])==true)
    {
        //get avatar base url
        echo $base_url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/nectest/';
        
        //set session data
        $_SESSION["userid"] =$user["id"];
        $_SESSION["firstname"] = $user["firstname"];
        $_SESSION["lastname"] = $user["lastname"];
        $_SESSION["avatar"] = $base_url."uploads/".$user["avatar"];
        header("Location: ../dashboard.php");
    }
    else
    {
        $_SESSION["error"] = "Invalid username or password.";
        header("Location: ../login.php");
    }
}
?>
