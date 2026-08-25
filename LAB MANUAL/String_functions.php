<?php

    $str = "Welcome to PHP Programming";

    echo "length of String : " . strlen($str) . "<br> <br>";
    echo "Position : " . strpos($str , "PHP") . "<br> <br>";
    echo "Word Count : " . str_word_count($str) . "<br> <br>";
    echo "Reverse String : " . strrev($str) . "<br> <br>";
    echo "Lowercase String : " . strtolower($str) . "<br> <br>";
    echo "Uppercase String : " . strtoupper($str) . "<br> <br>";

?>