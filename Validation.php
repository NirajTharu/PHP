<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username_validation</title>
</head>
<form action="Validation.php" method="post">
    Username:
    <input type="text" name="username"><br>

    age:
    <input type="text" name="age"><br>


    E_mail:
    <input type="text" name="email"><br>
    <input type="Submit" name="login" value="login">
</form>

<body>

</body>

</html>
<?php
// Validate the username in php
// THIS ONE IS INCOMPLETE
if (isset($_POST["login"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);


    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);


    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL,);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);



    if (empty($email)) {
        echo "invalid email";
    } else {
        echo "Your email is {$email}";
    }
}
?>