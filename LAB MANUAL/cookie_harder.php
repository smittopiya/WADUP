<?php
setcookie("username", "Rahul", time()+3600);

header("Location: read_cookie.php");
exit();
?>