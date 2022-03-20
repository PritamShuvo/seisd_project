<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <?php
        require('Database_Connection.php');
        session_start();

        if(isset($_POST['submit']))
        {
            $user=$_POST['username'];
            $password=$_POST['password'];

            $sql="select * from user where username='$user' and password='$password'";

            $result=mysqli_query($con,$sql);
            $rows=mysqli_num_rows($result);

            if($rows==1)
            {
                $_SESSION['username']=$user;
                header("Location:Welcome.php");
            }
            else
            {
                echo "<div class='box'>
                <h3>Incorrect Username or Password</h3></br>
                <p class='link'><a href=Login.php>Click Here to Login Again</a></p>
                </div>";
            }
        }
    ?>
    <form class="Box"action="" method="post">
       <h1>Login</h1>
       <input type="text"name="username" placeholder="Username" autocomplete="off"required>
       <input type="password"name="password" placeholder="Password" autocomplete="off"required>
       <input type="submit" value="Login" name="submit">
       <p><a class="Link" href="Registration.php">Click Here to Register</a></p>
    </form>
</body>
</html>