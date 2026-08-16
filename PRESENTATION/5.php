<?php

// 5. array_count_values() - Counts how many times a value appears

$arr = ["Apple", "Apple", "Banana"];

echo "5." ."<br>". "Before array_count_values(): ['", $arr[0], "', '", $arr[1], "', '", $arr[2], "']\n"."<br>";

$res = array_count_values($arr); 

echo "   After array_count_values(): ['Apple' => ", $res["Apple"], ", 'Banana' => ", $res["Banana"], "]\n\n";

?>