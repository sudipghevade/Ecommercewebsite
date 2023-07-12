<?php
include 'menuclientinfo.html';

$conn=mysqli_connect("localhost","root","","ecommerce");

$client_id=$_GET['client_id'];




$cmd="select name,email,number from registration where client_id=$client_id limit 1";




$sql_obj=mysqli_query($conn,$cmd);







echo "<table class='table mt-15'>

<thead>

<tr>
    <th>name</th>
    <th>email</th>
    <th>contact no</th>
    
</tr>

</thead>

<tbody>

";


$row=mysqli_fetch_assoc($sql_obj);

    $client_name=$row['name'];
    $client_email=$row['email'];
    $client_number=$row['number'];

    echo "<tr>    
        <td>$client_name</td>
      
        <td>$client_email</td>
        <td>$client_number</td>
  
        
    </tr>";



echo "</tbody>

</table>";

// -------------------------------------------------------------------------



//prettify this display



echo "<a class='goback' href='client_order.php'>Go Back</a>";

?>


