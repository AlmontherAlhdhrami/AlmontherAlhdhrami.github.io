<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
<style>
body{
   background-image:url("logo4.jpg");
}


.card{display:inline-flex;
  justify-content: center;
  justify-items: center;
         margin: 10px;
}
 .card img{
  width: 100%;
  height: 200px;
}
a:hover{
    background-color: white;
    color: black;
    cursor: pointer;
    transform: scale(1.1);
    transition: all 0.5s ease;
    z-index: 1;

  }
  #shopingcart{margin-left:50px; 
  text-decoration:none ;}
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <a id="shopingcart"class="navbar-brand" href="card.php"> عربتي</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">shop</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="shop.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="card.php">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
    <nav class="navbar navbar-white"style="background:white; " > <a id="shopingcart"class="navbar-brand" href="card.php"> عربتي</a> </nav>
    <center >
       <h4 style="color:aliceblue"> all product</h4>
    </center>


   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>



<?php

include('mydata.php');
$diplay_prd=mysqli_query($mydata,"SELECT * FROM product");
while($row=mysqli_fetch_array($diplay_prd)){
echo"

<div class='card' style='width: 18rem;'>
<img src='$row[image]'  class='card-img-top'>
<div class='card-body'>
  <h5 class='card-title'>$row[name]</h5>
  <p class='card-text'><h2>$row[price]</h2></p>
  
  <a href='val.php?id=$row[id]' class='btn btn-success'>إضافة للعربة</a>
 
</div>
</div>



";}


?>