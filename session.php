<?php
/*Session:SGB(Super global variable) used to store information on a user to be used across the 
multiple pages. A user is assigned a session-id ex. login credentials*/

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="session.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        Password:<br>
        <input type="password" name="password"><br>
        <input type="Submit" name="login" value="login">
    </form>
</body>

</html>
<?php
// $_SESSION["username"] = "niraj";
// $_SESSION["password"] = "Hi-fi@124";

if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && (!empty($_POST["password"]))) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];
        header("Location:home.php");
    } else {
        echo "Missing username of password.";
    }
}
?>