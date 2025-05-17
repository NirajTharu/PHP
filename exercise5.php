<!-- Movie ticket counter -->
<?php
$child = true;
$senior = false;
$ticket_price = null;

if ($child || $senior) {
    $ticket_price = 10;
} else {
    $ticket_price = 20;
}
echo "Your ticket price is \${$ticket_price}";
?>