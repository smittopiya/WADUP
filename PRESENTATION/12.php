<?php

// 12. array_shift() - Removes the FIRST item

$arr = [1, 2, 3];

echo "12." . "<br>" . "Before array_shift(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], "]\n" . "<br>";

array_shift($arr); 

echo "    After array_shift(): [", $arr[0], ", ", $arr[1], "]\n\n";

?>