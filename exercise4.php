<!-- Voting rights according to the age -->
<?php

$age = 21;
$citizen = true;
if ($age >= 18 && $citizen) {
    echo "You can vote.";
} else {
    echo "You cannot vote.";
}
?>