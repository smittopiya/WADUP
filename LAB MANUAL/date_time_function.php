<?php

    $date = "2026-07-07";

    echo "Date : " . $date . "<br><br>";
    echo "DAY OF WEEK : " . date ("w" , strtotime($date)) + 1 . "<br>";
    echo "DAY OF MONTH : " . date ("d" , strtotime($date)) . "<br>"; 
    echo "DAY OF YEAR : " . date ("z" , strtotime($date)) + 1 . "<br>";
    echo "DAY OF NAME : " . date ("l" , strtotime($date));
?>

