<?php
include("Db.php");
$username="Apple";
$password="clickme1";
$hash=password_hash($password,PASSWORD_DEFAULT);
$sql="INSERT INTO users (user,password)
VALUES ('$username','$hash')";

try{
    mysqli_query($conn,$sql);
    echo "User is now registered.";
}
catch(mysqli_sql_exception)
{echo "could not register user.";}

mysqli_close($conn);
?>