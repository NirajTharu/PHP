<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
</head>

<body>
    <form action="while_loop.php" method="post">
        <input type="Submit" name="Stop" value="Stop">
    </form>
</body>

</html>


<?php
// While loop:Do some code infinitely while some condition remains true


// Simple one
// $counter=0;
// while ($counter < 10) {
//     $counter++;
//     echo $counter ."<br>";
// }
// Run at your own risk
$seconds = 0;
$running = true;
while ($running) {
    if (isset($_POST["stop"])) {
        $running = false;
    } else { // Wait 1 sec
        $seconds++;
        echo $seconds . "<br>";
    }
}
?>