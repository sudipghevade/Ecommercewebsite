<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="upload.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
.parent{
background-color: white !important;
height: 60vh;
border-radius: 5px !important;
width: 35% !important;
margin-top: 130px !important;
margin-left: 500px !important;
box-shadow: 0 4px 4px rgba(0,0,0,0.08), 
                0 10px 10px rgba(0,0,0,0.12), 
                0 10px 10px rgba(0,0,0,0.16), 
                0 9px 9px rgba(0,0,0,0.20);

}

body {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    background:#DCDCDC !important;
  
  }

  

    </style>
  </head>
  <body>


  <div class="container1">
    <?php
  include 'menu.html';
  ?>

  </div>

  <?php


?>
    <div class="container1">
    <div class=" parent ">
      <h1>Upload image</h1>
     <form  enctype="multipart/form-data" action="uploadtable.php" method="POST">
      <div class="container parent-2 ">
        <div class="row col-12 mx-1">
          <input class="form-control" type="text" name="name" placeholder="product-name">
        </div>
        <div class="row col-12 mt-3 mx-1">
          <input class="form-control" type="number" name="actualprice" placeholder="Actual-price">
        </div>

        <div class="row col-12 mt-3 mx-1">
          <input class="form-control" type="number" name="price" placeholder="Discount-price">
        </div>
       
        <div class=" text1 col-11 mt-3 mx-1">
         
              <!-- <textarea name="details" id=""  rows="5" placeholder="Product Description" style="resize: none; border-radius: 10px;"></textarea> -->
              <textarea class="form-control" name="details" cols="20" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
          </div>

          <div class="col-12 mt-3 mx-1">
            <input type="file" name="imname" accept=".jpg" id="">
        </div>
        <div class="text-center mt-3">
          <input  type="submit" value="Add Product" class=" sucess w-100 btn btn-info rounded-pill">
      </div>
      </div>
     </form>

    </div>
  </div>
  </body>
</html>