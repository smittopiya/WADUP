<?php

$monthNum = (int)date("n");

function getMonthIfElse($m) {
    if ($m === 1) return "January";
    else if ($m === 2) return "February";
    else if ($m === 3) return "March";
    else if ($m === 4) return "April";
    else if ($m === 5) return "May";
    else if ($m === 6) return "June";
    else if ($m === 7) return "July";
    else if ($m === 8) return "August";
    else if ($m === 9) return "September";
    else if ($m === 10) return "October";
    else if ($m === 11) return "November";
    else if ($m === 12) return "December";
    else return "Invalid month";
}


function getMonthSwitch($m) {
    switch ($m) {
        case 1: return "January";
        case 2: return "February";
        case 3: return "March";
        case 4: return "April";
        case 5: return "May";
        case 6: return "June";
        case 7: return "July";
        case 8: return "August";
        case 9: return "September";
        case 10: return "October";
        case 11: return "November";
        case 12: return "December";
        default: return "Invalid month";
    }
}

echo "Current Month (IF..ELSE): " . getMonthIfElse($monthNum) . "<br>";
echo "Current Month (SWITCH CASE): " . getMonthSwitch($monthNum);
?>