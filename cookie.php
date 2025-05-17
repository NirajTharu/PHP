<?php
/* Cookie = Information about the user in  a user's web-browser targeted advertisement, 
browsing preferences and other non-sensitive data
*/
setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
setcookie("fav_drink", "cola", time() + (86400 * 1), "/");
setcookie("fav_dessert", "ice cream", time() + (86400 * 2), "/");

// To delete cookie 
// setcookie("fav_dessert", "ice cream", time() - 0 , "/");

// To show all the cookie store in your web browser
// foreach ($_COOKIE as $key => $value) {
//     echo "{$key}={$value}<br>";
// }

if (isset($_COOKIE["fav_food"])) {
    echo "Buy some{$_COOKIE["fav_food"]}!!!";
} else {
    echo "I don't know your favorite food.";
}
