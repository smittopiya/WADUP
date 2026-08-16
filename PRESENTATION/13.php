<?php

// 13. array_unique() - Removes duplicates

$arr = [1, 1, 2, 3, 3];

echo "13." . "<br>" . "Before array_unique(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], ", ", $arr[3], ", ", $arr[4], "]\n" . "<br>";

$res = array_unique($arr); 

// array_unique preserves keys, so index 1 and 4 are removed

echo "    After array_unique(): [", $res[0], ", ", $res[2], ", ", $res[3], "]\n\n";

?>