<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="CSS/registration.css">
</head>
<body>
    <?php
        require('Database_Connection.php');

        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "insert into user(username,email,password) values ('$username','$email','$password')";

            $result = mysqli_query($con, $sql);

            if($result)
            {
                echo "<div class='box'> 
                <h3 class='reg'>You Are Registered Successfully!</h3></br>
                <p class='link'> <a href='Login.php'>Click Here To Login</a></p> 
                </div>";
            }
            else
            {
                 echo "<div class='box'> 
                <h3>Required Fields Are Missing</h3></br>
                <p class='link'> <a href='Registration.php'>Click Here To Register Again</a></p> 
                </div>";
            }
        }
    ?>
    <form class="Box"action="" method="post">
       <h1>Register Here</h1>
       <input type="text"name="username" placeholder="Username" autocomplete="off"required>
       <input type="email" name="email" placeholder="Email" autocomplete="off"required>
       <input type="password"name="password" placeholder="Password" autocomplete="off"required>
       <input type="submit" value="Register" name="submit">
       <p><a class="Link" href="Login.php">Click Here to Log in</a></p>
    </form>
</body>
</html>