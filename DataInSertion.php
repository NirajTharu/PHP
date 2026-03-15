<?php
    include("Db.php");
    
    $username = "Timro";
    $passwords = "Timi11";

    $hash = password_hash('$passwords', PASSWORD_DEFAULT);

    $sql = "INSERT INTO User_Details(user, passwords)  
    VALUES ('$username', '$hash' )";
    try{
    mysqli_query($conn, $sql);
    echo "User is registered.";
    }
    catch(mysqli_sql_exception){
    echo "Could not registerd the user.";
    }


mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hi there. <br>

</body>
</html>