<?php
// Array:Variable which can hold more than one data at a time.
$fruits = array("Apple", "Banana", "orange", "pear", "Litchi", "coconut");

// For changing the element 
// $fruits[0]="Pineapple";

// Function1
// Push function which will add element to the end of the array
// array_push($fruits, "guava", "kiwi");

// Function2
// To delete/pop the last element of the array
// array_pop($fruits);

// Function3
// To remove the first element of the array
// array_shift($fruits);

// Function4
// To reverse the array
//  
// This will return a new array and we should assign to the array

// Function5
// To count the number of the elements in array
// echo count($fruits) . "<br>";
foreach ($fruits as $fruit) {
    // For the first alphabet of the array.
    // echo r>";$fruit[0]. "<br>";
    echo $fruit . "<br>";
}
