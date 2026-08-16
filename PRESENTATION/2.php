<?php

// 2. array_change_key_case() - Changes keys to lowercase/uppercase

$arr = ["NAME" => "John"];

echo "2." . "<br>" . "Before array_change_key_case(): ['NAME' => '", $arr["NAME"], "']\n"."<br>";

$res = array_change_key_case($arr, CASE_LOWER); 

echo "   After array_change_key_case(): ['name' => '", $res["name"], "']\n\n";

?>