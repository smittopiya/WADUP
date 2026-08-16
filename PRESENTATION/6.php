<?php

// 6. array_merge() - Joins two arrays together

$arr1 = [1, 2];

$arr2 = [3, 4];

echo "6." . "<br>" . "Before array_merge() - Arr1: [", $arr1[0], ", ", $arr1[1], "], Arr2: [", $arr2[0], ", ", $arr2[1], "]\n" . "<br>";

$res = array_merge($arr1, $arr2); 

echo "   After array_merge(): [", $res[0], ", ", $res[1], ", ", $res[2], ", ", $res[3], "]\n\n";

?>