<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "studentdb";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "INSERT INTO users(username, email, password)
        VALUES('$user', '$email', '$pass')";

if (mysqli_query($conn, $sql))
{
    echo "Registration Successful!";
}
else
{
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>