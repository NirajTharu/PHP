<!-- A order page for a restaurant -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_for restaurant</title>
</head>

<body>
    <form action="exercise1.php" method="post">
        <label for="">Quantity:</label><br>
        <input type="text" name="quantity">
        <input type="Submit" value="Total">
    </form>
</body>

</html>

<?php
$item = "Pizza";
$price = 4.99;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo "You have ordered {$quantity} x {$item}/s<br>";
echo "Your bill is: \${$total}";
?>