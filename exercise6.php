<?php
// Practicing the switch
$date = date("l");
switch ($date) {
    case "Sunday":
        echo "You should go to college.";
        break;
    case "Monday":
        echo "You should complete the whole week assignment.";
        break;
    case "Tuesday":
        echo "This day is for football.";
        break;
    case "Wednesday":
        echo "This day is for online gaming.";
        break;
    case "Friday":
        echo "You should work 1/2 day.";
        break;
    case "Saturday":
        echo "Today is holyday.";
        break;
}
