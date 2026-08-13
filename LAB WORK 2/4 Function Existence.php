<?php

function welcomeStudent() 
{
    echo "Welcome Students";
}

if (function_exists("WelcomeStudent")) 
{
    welcomeStudent();
} else 
{
    echo "Error: The function 'welcomeStudent' is not defined.";
}

?>