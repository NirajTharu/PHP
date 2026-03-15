<?php 
include("Db.php"); 
// if you want the find the specifi user
// $sql="SELECT * FROM User_Details WHERE user = 'papa'";
$sql="SELECT * FROM User_Details";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result))
    {
echo $row["id"]."<br>";
echo $row["user"]."<br>";
echo $row["register_Date"]."<br>";
    }; 
}
    else{echo"user not found.";}

mysqli_close($conn);
?>