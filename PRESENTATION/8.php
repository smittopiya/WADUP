<?php

// 8. array_push() - Adds an item to the END

$arr = [1, 2];

echo "8." . "<br>" . "Before array_push(): [", $arr[0], ", ", $arr[1], "]\n" . "<br>";

array_push($arr, 3); 

echo "   After array_push(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], "]\n\n";

?>