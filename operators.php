
<?php
// Arithmetic operators:
//  + - * / ** %

// Increment/Decrement operator
// ++/--  this will increment or decrement the value by one(1);


// Operator precedence
// ()
// **
// * / %
// + -

$x = 5;
$y = 8;
$z = 9;
$total = null;


//For addition
$total = $x + $y + $z;
echo "The addition is {$total}<br>";

$total = $x - $y - $z;
echo "The subtraction is {$total}<br>";

$total = $x * $y * $z;
echo "The multiplication is{$total}<br>";

$total = $x / $y / $z;
echo "The division is  {$total}<br>";

// ** is like $x^4;
$total = $x ** 4;
echo "The total is  {$total}<br>";

// Modulo operator
$total = $y % $x;
echo "The modulo is {$total}<br>";


// Increment and decrement operator
$counter = 0;
$counter++;
echo " The counter is incremented by one {$counter}.<br>";

$counter--;
echo "The counter is decremented by one {$counter}<br>";



// For the precedence
$total = 1 - 2 + 5 * 5 / 2 ** 3;
echo "The total of above is {$total}<br>";
?>