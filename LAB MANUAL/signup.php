<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>
    <center> 
    <form method = "post" enctype = "multipart/form-data">
    <h1 > Sign Up </h1>
    <h3> Username : 
    <input type = "text" name = "Username" /> <br>
    <h3> Password : 
    <input type = "password" name = "Password" /> <br>
    <h3> Confirm Password : 
    <input type = "password" name = "Confirm_Password" /> <br>
    <h3> Email : 
    <input type = "email" name = "Email" /> <br>
    <h3> Phone Number : 
    <input type = "text" name = "Phone_Number" /> <br>
    <h3> Profile : 
    <input type = "file" name = "image"> </br> </br>
    <input type = "submit" name = "submit" value = "Upload Image"> </br> </br>
 
    </form>
    </center>
    
<?php

    include 'db.php';

    if(isset($_POST['submit']))
    {
        $user = $_POST['Username'];
        $pass = $_POST['Password'];
        $con_pass = $_POST['Confirm_Password'];
        $email = $_POST['Email'];
        $phone_number = $_POST['Phone_Number'];
        $profile = $_FILES['image']['name'];

        if ($pass == $con_pass) {
            $sql = "INSERT INTO `user`(`username`, `password`, `email`, `phone_number`, `image`) VALUES ('$user','$pass','$email','$phone_number','$profile')";
            
            if (mysqli_query($conn, $sql)) {
                echo "Sign Up successful";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Passwords do not match";
        }
    }

?>
</body>
</html>