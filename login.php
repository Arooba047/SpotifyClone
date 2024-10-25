<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['Username'];
    $password=$_POST['Password'];

    $sql="Select * from `login` where Username='$username' and Password='$password'";
    $result=mysqli_query($conn,$sql);

    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
        echo '<script>alert("Login Successfull!");</script>';
        echo '<script>window.location.href = "home.html";</script>';
        // echo "SignUp Successful.";
        }
    else{
        echo '<script>alert("Invalid Username or Password");</script>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df8fcfe1e2.js" crossorigin="anonymous"></script>
    <title>Login Spotify</title>
</head>
<body>
    <div class="topbar">
        <div class="logo">
            <a href="#"><img src="img\logo2.png" alt="logo"></a>
        </div>
    </div>
    <div class="container">
        <h1>Log in to Spotify</h1>
        <div class="form">
            <form action="login.php" method="post" autocomplete="off">
                <button id="googlebutton"><span class="fa-brands fa-google"style="position: relative; right:70px;"></span><span>Log In with Google</span></button>
                <br>
                <button id="facebookbutton"><span class="fa-brands fa-facebook"style="position: relative; right:60px;"></span><span>Log In with Facebook</span></button>
                <br>
                <button id="applebutton"><span class="fa-brands fa-apple"style="position: relative; right:75px;"></span><span>Log In with Apple</span></button>
                <br>
                <hr>
                <br>
                <label for="" style="position: relative;right: 110px;">Username</label><br>
                <input type="text" name="Username"style="color:black;">
                <br>
                <label for="" style="position: relative;right: 110px;">Password</label>
                <br>
                <input type="password" name="Password" style="color:black;">
                <br>
                <button>Log In</button>
                <br><hr>
                <div class="notacc">
                    <p>Don't have an account?<a href="Signup.php">Sign up for Spotify</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>