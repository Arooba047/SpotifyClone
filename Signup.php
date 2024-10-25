<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'connect.php';
    $username=$_POST['Username'];
    $password=$_POST['Password'];

    $sql="Select * from `login` where Username='$username'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
            echo '<script>alert("User Already Exiested");</script>';
        }   
        else{
                $sql="insert into `login`(Username,Password)values('$username','$password')";
                $result=mysqli_query($conn,$sql);
                if($result){
                    echo '<script>alert("Sign Up Successful!!");</script>';
                    echo '<script>window.location.href = "home.html";</script>';
                    }
                    else{
                    die(mysqli_error($conn));
                    }
                
            
            
            }
        }    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signupstyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df8fcfe1e2.js" crossorigin="anonymous"></script>

    <title>Sign up Spotify</title>
</head>
<body>

    <div class="topbar">
        <div class="logo">
            <a href="#"><img src="img\logo2.png" alt="logo"></a>
        </div>
    </div>
    <div class="container">
        <h1>Sign Up for a free<br>Spotify account.</h1>
        <div class="form">
            <form action="Signup.php" method="post" autocomplete="off">
                <!-- <input type="text" name="email" placeholder="E-mail"> -->
                <br>
                <input type="text" name="Username" placeholder="Username">
                <br>
                <input type="password" name="Password" placeholder="Password">
                <br>
                <button>Continue</button>
                <br>
                <p>_______________________________OR_________________________________</p>
                <br>
                <button id="facebookbutton"><span class="fa-brands fa-facebook"style="position: relative; right:60px;"></span><span>Sign Up with Facebook</span></button>
                <br>
                <div class="terms">
                    <input type="checkbox" name="conditions" id="conditions" required><small style="color: #b3b3b3;">I agree to <b>Spotify's Terms and Conditions of Use</b> and <b>Privacy Policy</b></small>
                </div>
                <br>
                <!-- <div class="back">
                    <p><a href="index.html">Back</a></p>
                </div> -->
                <div class="alreadyacc">
                    <p>Already on Spotify?<a href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>