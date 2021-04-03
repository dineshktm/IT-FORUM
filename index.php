<?php
session_start();
if(isset($_SESSION['role'])&&isset($_SESSION['uname']))
{	
		header('Location:firstpage.php');
}
else
{
?>


<!DOCTYPE html>
<html>
    <head> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="login1.png" type="image/x-image">
        <title>LOGIN</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>

        <div class="loginbox">
            <img src="loginavatar2.jpg" class="avatar">
                <h1>Login Here</h1>
                <form name="myform" action="login.php" method="POST">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter Password">
                    <input type="submit" name="" value="Login">
                </form>
                
        </div>
    </body>
</html>


<?php
}
?>