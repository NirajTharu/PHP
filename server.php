<?php
// $_SERVER superglobals  =  that contains hearders, paths, and script location. 
// The enteries in this array are created by the web server.
// Shows everything you need to know about the current web page environment.

foreach($_SERVER as $key=> $value){
    echo "{$key} ={$value}<br>";
}

if($_SERVER["REQUEST_METHOD"] =="POST")
        {
            echo "Your username is in our record.";
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!-- action = "server.php"
     instead of this you can use down method and it will work if you change the file name anytime. -->
     <!-- Lets change the file name server.php to I.php and then run  
      htmlspecialchars for avoiding cross site scripts-->
    <form action = "<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "post">
    username:
    <input type="text" name = "username">
    <input type="submit">  
    </form>
</body>
</html>