<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Useful functions in php</title>
</head>

<body>
    <form action="Useful_fun.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="Username"><br>
        <label for="">Password:</label>
        <input type="password" name="Password"><br>
        <input type="Submit" name="login" value="Log In"><br>
    </form>
</body>

</html>
<?php
// isset(): Returns TRUE if a variable is declared and not null;
// empty(): Returns TRUE if a variable is not declared, false, null, " "(empty sting)

foreach ($_POST as $key => $value)
    echo "{$key}={$value}<br>";

if (isset($_POST["login"])) {
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    if (empty($username)) {
        echo "Missing username.";
    } elseif (empty($password)) {
        echo "Missing password.";
    } else {
        echo "Hi_{$username}";
    }
}
?>