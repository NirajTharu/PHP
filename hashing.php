<?php
/*  hashing = Transforming the sensitive data(password) into letters, numbers, and or symbols via a mathematical 
    process(similar to encryption). Hides the original data from the 3rd parties.
    */
$password = "Apple123";
$hash = password_hash($password, PASSWORD_DEFAULT);
// echo $hash;
if (password_verify("Apple123", $hash)) {
    echo "You are logged in.<br>";
} else {
    echo "Incorrect password";
}
?>
