<!-- Calculation of someone pay overtime -->
<?php
$hours = 660;
$rate = 15;
$weekly_pay = null;

if ($hours <= 0) {
    $weekly_pay;
} elseif ($hours <= 40) {
    $weekly_pay = $hours * $rate;
} else {
    $weekly_pay = (40 * $rate) + (($hours - 40) + ($hours * 1.5));
}
echo "You made \${$weekly_pay} this week. <br>";
?>