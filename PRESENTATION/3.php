<?php

// 3. array_chunk() - Splits array into smaller arrays

$arr = [1, 2, 3, 4];

echo "3" . "<br>". "Before array_chunk(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], ", ", $arr[3], "]\n"."<br>";

$res = array_chunk($arr, 2); 

echo "   After array_chunk(): [[", $res[0][0], ", ", $res[0][1], "], [", $res[1][0], ", ", $res[1][1], "]]\n\n";

?>