<!-- User will input the radius  and the interface should calculate that -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise_2</title>
</head>

<body>
    <form action="exercise2.php" method="post">
        <label for="radius">Radius:</label>
        <input type="text" name="Radius">
        <input type="Submit" value="calculate">
    </form>

</body>

</html>

<?php
$radius = $_POST["Radius"];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$area = pi() * pow($radius, 2);
$volume = 4 / 3 * pi() * pow($radius, 3);

// For round off upto 3 decimal point
$circumference = round($circumference, 3);
$area = round($area, 3);
$volume = round($volume, 3);


echo "The circumference of the circle is {$circumference}cm <br>";
echo "The area of the circle is{$area}cm^2<br>";
echo "The volume of the sphere is{$volume}cm^3";
?>