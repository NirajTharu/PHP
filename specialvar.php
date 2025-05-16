<?php
// Special variable is php


// $_GET and $_POST = Special variables  used to collect data from an HTML forms. 
//          Data is sent to the file in action attribute of <form>.
//          <form action="some_file.php" method="get"></form>

//$_GET  =  Data is append to the url
//          NOT  SECURE
//          char limit
//          Bookmarks is possible w/ values
//          GET request can be cached
//          Better for search page


//$_POST=   Data is packaged inside the body of HTTP request
//          MORE SECURE
//          No data limit
//          Cannot bookmark
//          GET requests are not cached
//          Better for submitting credentials



// For line break between the username and password
// 1st way
// echo "{$_GET["Username"]} <br>";
// echo "{$_GET["Password"]} <br>";

// 2nd way
// echo $_GET["Username"] . "<br>";
// echo $_GET["Password"] . "<br>";

// For the post method
echo "{$_POST["Username"]} <br>";
echo "{$_POST["Password"]} <br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- for the method it should be changed to the post while using the "$_POST" -->
    <form action="specialvar.php" method="post">
        <label for="">Username</label><br>
        <input type="text" name="Username"><br>

        <label for="">Password</label><br>
        <input type="password" name="Password"><br>
        <input type="submit" value="LogIn">
    </form>
</body>

</html>