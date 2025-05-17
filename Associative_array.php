<?php
// associative array: an array made up of the key value pair;
// Examples:
// Country->capitals
// id-> username
// item-> price

$capitals = array(
    "USA" => "Washington D.C.",
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "China" => "Beijing",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul"
);
// For changing 
$capitals["USA"] = "Las Vegas";
// For adding
$capitals["Bhutan"] = "Thimphu";

// For the keys of the array
// $keys = array_keys($capitals);
// foreach ($keys as $key) {
//     echo "{$key} <br>  ";
// }

// For the values of the array
// $values = array_values($capitals);
// foreach ($values as $value) {
//     echo "{$value} <br>  ";
// }

// For flipping keys and values ie. the key will be value and value will be key.
// will crate a new array so we should create a new array or reassign it 
$capitals = array_flip($capitals);
foreach ($capitals as $key => $value) {
    echo "{$key} = {$value} <br>";
}


// foreach ($capitals as $key => $value) {
//     echo "{$key} = {$value}.<br>";
// }
