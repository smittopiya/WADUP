<?php

// 9. array_replace() - Replaces items by their index

$arr = ["A", "B", "C"];

echo "9." . "<br>" . "Before array_replace(): ['", $arr[0], "', '", $arr[1], "', '", $arr[2], "']\n" . "<br>";

$res = array_replace($arr, [0 => "X"]); 

echo "   After array_replace(): ['", $res[0], "', '", $res[1], "', '", $res[2], "']\n\n";

?>