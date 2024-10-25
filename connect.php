<?php
$Servername='localhost';
$Username='root';
$Password='';
$Dbname='login';

$conn=mysqli_connect($Servername,$Username,$Password,$Dbname);

if($conn)
{
    // echo"Connection Successfull";
}
else
{
    die(mysqli_error($conn));
}
?>