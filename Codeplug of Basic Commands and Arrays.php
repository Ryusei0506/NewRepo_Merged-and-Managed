<!DOCTYPE html>
<html>
<body>

<?php

//#1 creates a varaible
$MyFirstVariable = 'Ryusei';

//#2 Outputs a literal string
echo "My first variable was named " . '$MyFirstVariable' . "." . "<br>";

//#3 output a dynamic string
echo "The value of variable was " . $MyFirstVariable . "." . "<br>";

//#4 create empty array named "empty"
$empty = array();

//#5 creates an array of your first name, last name, and semester with labels
$firstName = "Ryusei";
$lastName = "Yamamoto";
$semester = "Fall";

//#6 Creates an array of numbers from 1 to 50 dynamically (do not declare all 50 elements in your code)
echo(rand(1,50)) . "<br>";

//#7 Outputs the sum of the length of string from answers 2 and 3 by calling a predefined function and adding the results
echo strlen("Ryusei" . '$MyFirstVariable');

?>

</body>
</html>