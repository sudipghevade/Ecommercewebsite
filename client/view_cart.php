<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

h2{
        text-align:center !important;
        align-items:center !important;
        color:white !important;
        font-weight:bolder;
        background-color:#3498db;
        padding:5px;
        border-radius:8px;
    }


    @media only screen and (max-width: 600px) {
  .container {
    display:flex;
    flex-direction: row;
  }
}


@media only screen and (max-width: 600px) {
  .secondcol {
   background-color:green;
  }
}
  </style>
</head>
<body>
  
</body>
</html>





<?php




session_start();

include 'menu.html';
$client_id=$_SESSION['client_id'];
$conn=mysqli_connect("localhost","root","","ecommerce");
$cmd="select product.*,cart.* from cart 
join product on cart.pdt_id=product.id 
where client_id=$client_id";


$sql_obj=mysqli_query($conn,$cmd);
echo "<div class='container'>";
echo "<div class='row'>
<h2>Product cart list</h2>";
echo "<div class='col-10'>";


$total_price=0;

    while($row=mysqli_fetch_assoc($sql_obj))
    {
            
            $name=$row['name'];
            $impath=$row['target_path'];
                 $price=$row['price'] ; 
                 $detail=$row['details']  ; 
                 $total_price+=$price; 
                 $actualprice=$row['actualprice'];
                  $pid=$row['pdt_id'];
     

        echo "
        
        <div class='card'>
       
        <div class='img1'>
        <img  src='$impath'>

        </div>
        <div class='head'>
        <h3 >$name</h3>

        </div>
        <div class='head'>
        <p>Just Rs $actualprice</p>

        </div>
        <div class='price'>
        <p>Rs $price</p>
        </div>
   

        <div class='detail'>
        <p> $detail</p>

        
        </div>
        <div class=' d-flex  button10'>
        <a href='deletecart.php?pid=$pid'>
        <button type='button' btn1 class='btn btn-warning btn-lg'>Delete</button></a>
        

        </div>


        </div>
        
        

        
        
        
        
        ";
    
            
    }

    echo "</div>";


    echo "<div class='col-2 secondcol'>";
    echo "<h4 class='pt-2 color-black'>Total Price=Rs $total_price </h4>";
    echo "<a href='order_detail.php'>
    <button class='btn btn-success p-3 mt-2'>detail order</button>
    </a>";

    // echo "<a href='place_order.php'>
    //         <button class='btn btn-success p-3 mt-2'>Place order</button>
    //         </a>";
    echo "</div>";

   
echo "</div>";




    echo "</div>";
    echo "</div>";

  
    ?>



<!-- ---------------------------------------------------------------------------- -->




    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fira+Sans:ital,wght@1,600&family=Rakkas&family=Tai+Heritage+Pro&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Fira+Sans:ital,wght@1,600&family=Open+Sans&family=Rakkas&family=Secular+One&family=Tai+Heritage+Pro&display=swap');
    .card{
     
        width: 300px;
  height: 410px !important;
        display:inline-block !important;
        box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);

        

        margin-left:18px;
        margin-top:25px;
        font-family: 'Tai Heritage Pro', serif;
        position:relative !important;

    }

    .client-name{

   /* background-color:white !important; */
   position:absolute;
   top:70px;
   left:470px;
   font-size:25px;
   color:white;
   font-weight:bolder;


    }

    /* .card {
  width: 300px;
  height: 400px;
  display:inline-block !important;
  border-radius: 10px;
  box-shadow: 0 4px 6px 0 rgba(0, 0, 0, 0.2);
  position:relative !important;
  margin-left:18px;
        margin-top:25px;
        top:100px;

} */

    .card:hover{
  transform: scale(1.05);
  transition: all 1s ease;
  z-index: 999;
}


@keyframes animate {
  0% {
    transform: translate(-50%, -50%) rotate(0deg);
  }
  100% {
    transform: translate(-50%, -50%) rotate(360deg);
  }
}

    body {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  
  /* background:rgb(232,232,232)!important; */
}

   
    /* .head{
        background-color:background: hsla(152, 100%, 50%, 1);

background: linear-gradient(90deg, hsla(152, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(152, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(152, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#00FF87", endColorstr="#60EFFF", GradientType=1 );
align-items:center;
display:flex;


    } */
    h3{
        color:black; 
        font-size:18px !important;
        padding:10px;
        letter-spacing:0.6px;
        color:black;
        font-weight:bolder !important;
        font-family: 'Tai Heritage Pro', serif;

      



       }
   
    img{
        width: 100%;
    height: 21vh;
    }
    .price{
        align-items:center;
        
    }
    .price p{
        color:grey;
        font-family: 'Tai Heritage Pro', serif;
      color:bleck;
        font-size:15px;
        font-weight:bolder;
        padding:10px;


        
    }
    .head{
        display:inline-block;


    }
    h4{
        margin-left:115px;
        margin-bottom:8px;
        padding:0;
        margin:0px;
        font-size:20px !important;
    }
    .price h4{
        

    }
    .button1{
        width:100%;
        padding:5px;
        
        color:white;
        border:2px solid #28a745;
        border-radius:5px;
     background-color: background: hsla(217, 100%, 50%, 1);

background: linear-gradient(90deg, hsla(217, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

background: -moz-linear-gradient(90deg, hsla(217, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

background: -webkit-linear-gradient(90deg, hsla(217, 100%, 50%, 1) 0%, hsla(186, 100%, 69%, 1) 100%);

filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#0061FF", endColorstr="#60EFFF", GradientType=1 );;

    }
    hr{
        width: 90% !important;
        position:absolute !important;
        top:240px !important;
        height:2px !important;
        left: 6px !important;
    }
    .button10 a{
        display:inline-block;
        
        width:50% !important;
        margin: bottom 9px !important;
        margin-left:15px;


    }
    .price p{
        text-decoration:line-through;
        color:green;

    }
    .detail p{
        margin-left:8px !important;
        margin-top:8px !important;
    }
    .head p{
        margin-top:3px;
        position:absolute;
        left:150px;
        padding:4px;
        padding: 5px 15px;
        font-weight:bolder;
        margin-top:10px !important;

        border-radius:4px ;
        border: 1.5px solid #007bff;
  border-radius: 3px;
  color: #007bff;    }



.secondcol{
    /* border:2px solid black; */
    height:17vh;
    margin-top:10px;
    background:white;
    box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.2);

}


    
    </style>

</head>

</html>
