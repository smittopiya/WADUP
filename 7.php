<?php

// 7. array_pop() - Removes the LAST item

$arr = [1, 2, 3];

echo "7." . "<br>" . "Before array_pop(): [", $arr[0], ", ", $arr[1], ", ", $arr[2], "]\n" . "<br>";

array_pop($arr); 

echo "   After array_pop(): [", $arr[0], ", ", $arr[1], "]\n\n";

?>