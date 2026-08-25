<?php

$cookie_name = "visitor";

if(isset($_COOKIE[$cookie_name]))
{
    echo "<h2>Welcome Back!</h2>";
    echo "You are a repeated user.";
}
else
{
    setcookie($cookie_name, "visited", time() + (30 * 24 * 60 * 60), "/");

    echo "<h2>Welcome!</h2>";
    echo "You are a new user. A cookie has been created.";
}

?>