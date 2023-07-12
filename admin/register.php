<?php

$name=$_POST['name'];
$mobile=$_POST['mobile'];
$mail=$_POST['emailid'];
$password=$_POST['password'];
// $password=md5($password);


$conn=mysqli_connect("localhost","root","","ecommerce");

$cmd="insert into adminregistration(name,number,email,password) 
        values('$name','$mobile','$mail','$password')";

$result=mysqli_query($conn,$cmd);
if($result)
{
    header('location:login.html');
}
else
{
    echo "<h2>Mobile/Mail Id is already Registered</h2>";
    echo "<a href='register.html'>Try Again</a>";
}

?>