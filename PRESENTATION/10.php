<?php

// 10. array_reverse() - Flips the order

$arr = [1, 2, 3];

echo "10." . "<br>" . "Before array_reverse(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], "]\n" . "<br>";

$res = array_reverse($arr); 

echo "    After array_reverse(): [", $res[0], ", ", $res[1], ", ", $res[2], "]\n\n";

?>