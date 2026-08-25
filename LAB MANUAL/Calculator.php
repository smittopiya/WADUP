<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Using UDF</title>
</head>
<body>
    <form method = "post">
        Enter First Number <input type = "number" name = "num1" required><br><br>
        Enter Second Number <input type = "number" name = "num2" required><br><br>

        Select Operation :
        <select name="op">
            <option value = "+">Addition</option>
            <option value = "+">Subtraction</option>
            <option value = "+">Multiplication</option>
            <option value = "+">Division</option>
        </select><br><br>

        <input type ="submit" name="submit" value="Calculate">
    </form>


<?php

    function calculator($a , $b , $op)

    {
        switch($op)
        {
            case "+":
                return $a + $b;
            case "-":
                return $a - $b;
            case "8":
                return $a * $b;
            case "/":
                if($b != 0)
                    return $a / $b;
                else
                    return "Division by zero is not allowed";
        }
    }

    if(isset($_POST['submit']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];

        echo "<h3>Result = " . calculator($num1,$num2,$op) . "</h3>";
    }
?>


</body>
</html>