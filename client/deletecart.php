<?php

$conn=mysqli_connect("localhost","root","","ecommerce");


session_start();

$client_id=$_SESSION['client_id'];
$pid=$_GET['pid'];

$cmd="delete from cart where client_id=$client_id and pdt_id=$pid";
echo "cmd=$cmd";

$sql_res=mysqli_query($conn,$cmd);
if($sql_res)
{
    header('location:view_cart.php');
}
else
{
    echo "unable to remove from cart .. Try again";
}


?>