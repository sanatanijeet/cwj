<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <?php
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
<?php
    $someNumber = 598.5;
    var_dump(is_integer($someNumber));
?>
<br>

<?php
$cv = acos(8);
var_dump($cv);
?> -->
<!-- <br>
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>
<br> -->

<!-- <br> 
<?php
    $x = 567.8;
    $cast_int = (int)$x;
    echo $cast_int;
    echo "<br>";
    $y = "56748.768";
    $int_cast = (int)$y;
    echo $int_cast;
?> -->

<br>
<!-- <?php
    // define("GREETING", "Welcome to W3Schools.com!");
    // echo GREETING;
    // define("Hello", "HI", false);
    // echo Hello;
    const car = "Volvo";
    echo car;
?> -->

<!-- <?php
    define("cars", [
        "Volvo", "BMW", "Hyundai"
    ]);
    echo cars[1];
?> -->
<br>
<!-- <?php
    define("GREETING", "Hello World!");

    function test() {
        echo GREETING;
    }
    test();
?> -->
<br>
<!-- <?php
    class Fruits {
        public function myValue() {
            return __CLASS__;
        }
    }
    $kiwi = new Fruits();
    echo $kiwi->myValue();
?> -->
<br>
<!-- <?php
    $a = 13;
    $b = $a < 10 ? "Hello 10" : "Good Bye";
    echo $b;
?> -->
<br>
<!-- <?php
    $a = 50;
    if($a > 49){
        echo "less then 49";
        if($a<49){
            echo "above 49";
        }
        else{
            echo "Non of these";
        }
    }
?> -->
<br>
<!-- <?php
    $color = "orange";

    switch ($color){
        case "red":
            echo "color is red";
        break;
        case "green":
            echo "color is gree";
        break;
        default:
        echo "Non of these";
    }
?> -->
<br>
<!-- <?php
    for($x=0; $x <=10; $x++){
        echo "$x <br>";
    }
?> -->
<br>
<!-- <?php
    $age = array("Jeet"=>"35", "golu"=> "40");
    foreach ($age as $x => $value) {
        echo "$x = $value<br>";
    }
?> -->
<br>
<?php
    //function with argument
    function arg($name, $age){
        echo "$name age is $age <br>";
    }
    arg("Jeet", 38);
    arg("golu", 20);
?>
<br>
</body>
</html>