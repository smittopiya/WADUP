<?php

    echo "5 to 10 using For Loop <br><br>";
    for($i=5;$i<=10;$i++)
        echo $i."<br>";
    
    echo "<br> 5 to 10 using ForEach Loop <br>";

    $numbers = range(5, 10); 

    foreach ($numbers as $num) {
        echo $num . "<br>";
    }

?>
