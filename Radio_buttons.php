<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio_buttons</title>
</head>

<body>
    <form action="Radio_buttons.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Master">
        Master<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="Submit" name="Confirm" value="Confirm">

    </form>
</body>

</html>
<?php
if (isset($_POST["Confirm"])) {
    $credit_card = null;
    if (isset($_POST["credit_card"])) {
        $credit_card = $_POST["credit_card"];
    }
    switch ($credit_card) {
        case "Visa":
            echo "You selected Visa.";
            break;
        case "Master":
            echo "You selected Master.";
            break;
        case "American Express":
            echo "You selected American Express.";
            break;
        default:
            echo "Please make a selection";
            break;
    }
}
?>