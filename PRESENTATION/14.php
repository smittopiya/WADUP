<?php


// 14. array_values() - Strips custom keys and re-indexes with numbers

$arr = ["a" => "Apple", "b" => "Banana"];

echo "14." . "<br>" . "Before array_values(): ['a' => '", $arr["a"], "', 'b' => '", $arr["b"], "']\n" . "<br>";

$res = array_values($arr); 

echo "    After array_values(): ['", $res[0], "', '", $res[1], "']\n\n";

?>