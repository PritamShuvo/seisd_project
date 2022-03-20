<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="CSS/welcome.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <div class="box">
        <h1 class="welcome">Welcome <?php echo $_SESSION['username'];?>!</h1>
        <a class="Link" href="Homepage.php">Next</a></br> </br>
        <a class="Link"href="Logout.php">Logout</a>

    </div>
</body>
</html>