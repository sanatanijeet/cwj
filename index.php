<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // echo "Hello world and this is printed using PHP";
    ?>
    <?php
        //echo "Hello again   ";
        //Single line comment
        // $variable = 31;
        // $variable2 = 23;
        // echo $variable+$variable2;
    ?>
    
    <?php
        echo "Operators in PHP <br>
                Arithmetic Operators (+, -, *, /)<br>
                Assignment Operators (=, +=, -=, *=, /=)<br>
                Comparison Operators<br>
                Increment/Decrement Operators<br>
                Logical Operators <br><br> ";
        // echo "Arithmetic operators, Assignment operators, Comparison operators, Increment/Decrement operators, logical Operators"
        echo "Assignment Operators <br>";
        echo "=============================== <br>";
        $num1 = 5;
        echo $num1 +=2;
    ?>
    <br>
    ============================================================================ <br>
    Variables in PHP <br>
    <?php
        $txt = "www.google.com";
        echo "I love $txt!";
    ?>
    <br>
    ============================================================================ <br>
    PHP Variable Scope <br>
    1. Local <br>
    <?php
        $x = 5; //Globale Scope
        function checkScope() {
            //using x inside this function will generate an error
            // echo $x;
        }
        checkScope();
        echo "$x"
    ?>
    
    <br>
    2. Globale <br>
    <?php
        function check() {
            $number = 6;
            echo $number;
        }
        check();
    ?>
    <br>
    3. Static <br>
    <?php
        function myTest() {
            static $x = 0;
            echo $x;
            $x++;
    }
    $cars = array("volvo", "bmw");
    var_dump($cars);
        myTest();
    ?><br>
<?php
    $str = "This is string";
    echo strlen($str); // string length
    echo "<br>";
    echo str_word_count($str); // string count
    echo "<br>";
    echo strrev($str); // string reverse
    echo "<br>";
    echo strpos($str, "is"); // find word position in string
    echo "<br>";
    echo str_replace(" is ", " is a ", $str); // replace word in string
?>

<br>

</body>
</html>