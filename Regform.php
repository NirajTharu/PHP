<?php
include("Db.php ");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Form</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <h2>Welcome to Website:</h2>
        username:<br>
        <input type="text", name="username"><br>
        password:<br>
        <input type="password", name="password"><br>
        <input type="Submit", name="Submit",value="register">
    </form>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
}

if(empty($username)){
    echo "please inter the username.<br>";
}
elseif($password){
    echo "Enter the password.";
}

else{
    $hash=password_hash($password,PASSWORD_DEFAULT);
    $sql="INSERT INTO user(user, password),VALUES ('$username','$hash')";

    try{mysqli_query($conn,$sql);
        echo "You are registered now. ";
    }
    catch(mysqli_sql_exception){
        echo"Username is already taken!";
    }
  
}
mysqli_close($conn);
?>