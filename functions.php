<?php
/*Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/
function greeting() {
    echo "Welcome to the well structured code.";
}
/*
Call the function.
*/
greeting();


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/
function calculateArithmeticMean($a,$b,$c) {
    echo (($a+$b+$c)/3);
}
/*
Call the function with the values for paremeters.
*/

calculateArithmeticMean($a,$b,$c);



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/
function calculateTotalPrice($price) {
    echo $price + ($price*0.13);
}


/*
Declare the variable total
and assign it with the value 
that calculateTotalPrice outputs 
when it is called (with the value for price parameter).
*/
$total= 400;

/*
//Print total.
*/

echo "$";
calculateTotalPrice($total);

// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
//+---+
//| 4 |
//+---+
//Declare the global variable length and assign it with the value 12.
//Declare the global variable width and assign it with the value 6.
*/
$length = 12;
$width = 6;

//Declare the function named calculateRectangleArea. 
function calculatedRectangleArea () {
    $GLOBALS['area'] = $GLOBALS['length'] * $GLOBALS['width'];
}
//This function calculates and prints the area of rectangle based on the 
//global variables length and width.
//Make these variables accessible inside the local scope, and do the calculation and printing

/*
//Call the function.
*/
calculatedRectangleArea();
echo $area;
// task separator
echo "<hr style=\"margin 1rem 0\">";
//
///*
//+---+
//| 5 |
//+---+
//If the function for calculating the area of a triangle looks like this:
//*/
//function calculateTriangleArea($base, $height) {
//    $area =  ($base * $height) / 2;
//}
//
/*
//What can you do to make the $area accessible in global scope 
//(without using the return statement)?
*/

$bse=10;
$ht=6;

function calculateTriangleArea () {
    $GLOBALS['ta'] = ($GLOBALS['bse'] * $GLOBALS['ht'])/2;
}
    
/*
Choose the values for parameters and call the function.
*/
calculateTriangleArea();
//Print $area.

echo $ta;
    
?>