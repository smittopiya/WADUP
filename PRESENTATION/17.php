<?php

// 17. in_array() - Checks if a value exists (true/false)

$arr = ["A", "B", "C"];

echo "17." . "<br>" . "Before in_array() checking for 'B' in: ['", $arr[0], "', '", $arr[1], "', '", $arr[2], "']\n" . "<br>";

$res = in_array("B", $arr); 

// PHP outputs a boolean 'true' as '1' when using echo

echo "    After in_array() - Result: ", $res, " (1 means true)\n\n";

?>