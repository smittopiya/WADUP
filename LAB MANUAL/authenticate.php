<?php
session_start();

$valid_username = "admin";
$valid_password = "12345";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $valid_username && $password == $valid_password)
    {
        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();
    }
    else
    {
        echo "<h3>Invalid Username or Password</h3>";
        echo "<a href='login.php'>Login Again</a>";
    }
}
?>