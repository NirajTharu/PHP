<!-- If statements in php
  If statements = if some condition is true, do something 
                    if some condition is false, don't do it -->

<?php
$age = 5;
// $adult = true;
if ($age >= 18) {
    echo "You may enter this website.";
} elseif ($age == 0 || $age <= -1) {
    echo "Not a valid age.";
} elseif ($age >= 100) {
    echo "You are too old to enter this site.";
} else {
    echo "You must be 18  to enter this website.";

    // With Boolean variables
    // if($adult==true) both are applicable
    // if ($adult) {
    //     echo "You can enter this site.";
    // } else {
    //     echo "You must be an adult to enter this site.";
    // }
}
?>