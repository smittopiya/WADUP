<?php

// 11. array_search() - Finds a value and returns its position (index)

$arr = ["A", "B", "C"];

echo "11." . "<br>" . "Before array_search() looking for 'B' in: ['", $arr[0], "', '", $arr[1], "', '", $arr[2], "']\n" . "<br>";

$res = array_search("B", $arr); 

echo "    After array_search() - Found at index: ", $res, "\n\n";

?>