<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <form action="exercise8.php " method="post">
        <label for="">Enter the country name:</label>
        <input type="text" name="country">
        <input type="Submit" input>
    </form>
</body>

</html>


<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Nepal" => "Kathmandu",
    "India" => "New Delhi",
    "China" => "Beijing",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul"
);
$capital = $capitals[$_POST["country"]];
echo "The capital is {$capital}.";
?>