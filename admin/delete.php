<?php




$conn=mysqli_connect("localhost","root","","ecommerce");

$pid=$_GET['pid'];

$cmd="delete from product where id=$pid";
echo "$cmd";

$sql_result=mysqli_query($conn,$cmd);
if($sql_result)
{
    header('location:view.php');
}
else
{
    echo "<h1>Error in SQL Query</h1>";
}
?>


