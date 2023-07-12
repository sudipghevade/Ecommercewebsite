
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Document</title>
</head>
<style>
img{
    height:55px;
    width:28%;
}

h1{
    color:white;
}

</style>
<body>
  
</body>
</html>





<?php

$conn=mysqli_connect("localhost","root","","ecommerce");

session_start();
include 'menucopy.html';


$pdt_id=$_GET['pdt_id'];

$conn=mysqli_connect("localhost","root","","ecommerce");
$cmd="select product.*,cart.* from cart 
join product on cart.pdt_id=product.id 
where pdt_id=$pdt_id";



$sql_obj=mysqli_query($conn,$cmd);

// $cmd="select *  from cart where client_id=$client_id  ";


echo "<table class='table mt-15'>

<thead>

<tr>
    <th>product name</th>
    <th>actual price</th>
    <th>price</th>
    <th>product img</th>
    
</tr>

</thead>

<tbody>

";

$total_price=0;
$actual_totalprice=0;


while($row=mysqli_fetch_assoc($sql_obj))
    {

    // $product=$row['client_id'];
    $product_name=$row['name'];
    $price=$row['price'];
    $actual_price=$row['actualprice'];
    $total_price+=$price; 
    $actual_totalprice+=$actual_price;
    $impath=$row['target_path'];
    $amount_save= $actual_totalprice-$total_price;
    

    

    

    

    echo "<tr>    
     
    <td>$product_name</td>
    <td>  $actual_price</td>
    <td>$price</td>
    <td>    <div class='img1'>
    <img  src='$impath'>

    </div></td>
       
        
    </tr>";

    }



echo "</tbody>

</table>";
echo "<p class='pt-3 mx-4 color-black'>Total Actual Price=$actual_totalprice Rs</p>";

echo "<p class='pt-3 mx-4 color-black'>Total Price=$total_price Rs</p>";
echo "<p class='pt-3 mx-4 color-black'>You saved= $amount_save Rs</p>";




echo "<a class='goback' href='client_order.php'>Go Back</a>";



?>

<!-- <a href='place_order.php'>
            <button class='btn btn-success p-3 mx-4 mt-2'>proceed to payment</button>
            </a> -->