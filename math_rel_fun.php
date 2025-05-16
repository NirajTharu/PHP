<!-- Some  mathematics related functions -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math_Rel_Fun</title>
</head>

<body>
    <form action="math_rel_fun.php" method="post">
        <label>X:</label>
        <input type="text" name="x">

        <!-- According to the need you can uncomment  -->
        <!-- in case of two variable -->
        <!-- <label>y:</label>
        <input type="text" name="y"> -->

        <!-- In case of three variable -->
        <!-- <label>z:</label>
        <input type="text" name="z"> -->

        <input type="Submit" value="total">
    </form>
</body>

</html>


<!-- Php:PHP(Personal home page) hypertext preprocessor code -->
<?php
$x = $_POST["x"];
$total = null;

// You can test all
// For only positive value
// $total = abs($x);
// // For roundup value
// $total = round($x);
// // For roundup but only floor value
// $total = floor($x);
// // For roundup but only ceil value
// $total = ceil($x);
// // For square root
// $total = sqrt($x);
// // For Pi
// $total = pi();
// // For power (2^9)
// $total = pow($x, $y);

// // For Maximum of three
// $total = max($x, $y, $z);

// // For minimum
// $total = min($x, $y, $z);

// // For generation random number
// $total = rand();

//  For generating random number between
$total = rand(1, 6);
echo "The total is {$total}";
?>