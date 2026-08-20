<?php
$text = "Hello PHP World";

echo "<strong>Original String:</strong> " . $text . "<br><br>";

$length = strlen($text);
echo "1) strlen(): The length is " . $length . "<br>";

$position = strpos($text, "PHP");
echo "2) strpos(): 'PHP' starts at position " . $position . "<br>";

$words = str_word_count($text);
echo "3) str_word_count(): There are " . $words . " words<br>";

$reversed = strrev($text);
echo "4) strrev(): " . $reversed . "<br>";

$lowercase = strtolower($text);
echo "5) strtolower(): " . $lowercase . "<br>";

$uppercase = strtoupper($text);
echo "6) strtoupper(): " . $uppercase . "<br>";
?>