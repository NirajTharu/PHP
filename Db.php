<?php
//Connecting to the database:
// 1. MySQLi Extension
// 2. PDO (PHP data objects)

$db_SERVER ="localhost";
$db_user ="root";
$db_pass="root";
$db_name="Business_DB";
$conn="";
$conn = mysqli_connect($db_SERVER, $db_user, $db_pass, $db_name);

try{
    $conn=mysqli_connect("localhost","root","root","Business_Db");
}
catch(mysqli_sql_exception){
    echo "Could not connect.<br>" ;
}


if($conn)
{
    echo "You are connected.<br >";
}
?>