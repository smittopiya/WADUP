<?php

$username = $_POST["username"];
$password = $_POST["password"];

if($username == "admin" && $password == "12345")
{
    if(isset($_POST["remember"]))
    {
        setcookie("username", $username, time() + (30 * 24 * 60 * 60), "/");
        setcookie("password", $password, time() + (30 * 24 * 60 * 60), "/");
    }

    echo "<h2>Login Successful</h2>";
}
else
{
    echo "<h2>Invalid Username or Password</h2>";
}

?>