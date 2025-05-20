<?php 
include("Db.php"); 
$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);

if(mysqli_num_row($result)>0){
while($row=mysql_fetch_assoc($result))
    {
echo $row["id"]."<br>";
echo $row["user"]."<br>";
echo $row["reg_date"]."<br>";
    }; 
}
    else{echo"user not found.";}

mysqli_close($conn);
?>