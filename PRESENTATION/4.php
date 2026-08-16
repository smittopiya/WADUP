<?php

// 4. array_combine() - Combines keys and values

$keys = ["A", "B"];

$vals = [1, 2];

echo "4." ."<br>". "Before array_combine() - Keys: [", $keys[0], ", ", $keys[1], "], Values: [", $vals[0], ", ", $vals[1], "]\n"."<br>";

$res = array_combine($keys, $vals); 

echo "   After array_combine(): ['A' => ", $res['A'], ", 'B' => ", $res['B'], "]\n\n";

?>