<?php

$mobile=$_POST['number'];
$password=$_POST['password'];
// $password=md5($password);

$conn=mysqli_connect("localhost","root","","ecommerce");

$cmd="select * from adminregistration where number='$mobile' and password='$password' limit 1";

$sql_obj=mysqli_query($conn,$cmd);

$total_rows=mysqli_num_rows($sql_obj);

if($total_rows==0)
{
    echo "<h2>Invalid Credentials</h2>";
    echo "<a href='login.html'>Try Again</a>";
}
else
{
    $row=mysqli_fetch_assoc($sql_obj);
    
    session_start();
    $_SESSION['client_id']=$row['client_id'];
    $_SESSION['client_name']=$row['name'];

    // header('location:client_view.php');
    header('location:adminpannel.php');

}



?>