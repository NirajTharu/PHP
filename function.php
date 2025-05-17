<?php
// Creating function in php: Write some code once and reuse when you need it.
// type() after function name to invoke
// ex. add() subtract() multiply() divide()

// function birth_day($first_name, $age)
// {
//     echo "Happy birthday to {$first_name}!_ ";
//     echo "You are {$age} years old!<br>";
// }
// birth_day("Niraj", 21);
// birth_day("Seema", 26);
// birth_day("Suraj", 31);

// To check a number is even or odd
// function is_even($number)
// {
//     $result = $number % 2;
//     return $result;
// }
// echo is_even(57);


// For finding hypotenuse of a triangle
function hypotenuse($a, $b)
{
    $c = sqrt($a ** 2 + $b ** 2);
    return $c;
}
echo hypotenuse(3, 4);
