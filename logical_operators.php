<!-- Learning about logical operators -->

<?php
// Logical operators: Combine Conditional statements
// if(condition1 && condition2)
// && = True if both condition are true
// || = True if at least one condition is true
// ! =True if false and false if true
$temperature = 9;
$cloudy = false;
// if ($temperature <= 5 || $temperature >= 45)
if ($temperature >= 10 && $temperature <= 33) {
    echo "The weather is good.<br>";
    // for || 
    // echo"The weather is bad.<br>";
} else {
    echo "The weather is bad.<br>";
    // for || 
    // echo"The weather is good.<br>";

    // for boolean
    if ($cloudy) {
        echo "It's cloudy.";
    } else {
        echo "It's sunny.";
    }
}
?>