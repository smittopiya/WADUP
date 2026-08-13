<?php
    function calculatePercentage($s1,$s2,$s3,$s4,$s5)
    {
        $Total=$s1+$s2+$s3+$s4+$s5;
        $Per=$Total/5;
        echo "Total Marks : ".$Total."<br>";
        echo "Percentage : ".$Per."<br>";
    }
    calculatePercentage(60,70,80,80,70)
?>