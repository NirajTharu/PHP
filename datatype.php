<?php
// variable is a reusable container that holds data like string, integer, float, boolean,etc.

// Strings
$a = "Niraj Tharu";
$food = "pizza";
$email = "nirajc279@gmail.com";


echo "Hello{$a} <br>";
echo "I love {$food}<br>";
echo "& My emil is{$email}<br>";

// Integers are the whole number
$age = 19;
$users = 2;
$quantity = 3;

echo "I am {$age} years old.<br>";
echo "There are {$users} online<br>";
echo "The number of the product is {$quantity}<br>";


// Float which contain decimal place
$gpa = 2.8;
$price = 0.5;
$tax = 3.5;



echo "My gpa is {$gpa}<br>";
echo "Your food is of \${$price}<br>";
echo "The country has the tax of {$tax}%<br>";


// Boolean are either true or false
// These variable are not usually used like below these are usually used internally in the program

$online = true;
$employee = false;
$for_sale = true;

// For false nothing is display while for true "1" is displayed;
echo " Online Status {$online}.<br>";
echo " He is in our company{$employee}.<br>";
echo " This House is for sale{$for_sale}.<br>";


$total = NULL;
echo "Your have order of {$quantity} x {$food}s<br>";
$total = $quantity * $price;
echo "Your total is:\${$total}<br>";
