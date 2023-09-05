<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
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
 
</style>
</head>
<body>
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
  
  <a href='update.php?id=$row[id]' class='btn btn-primary'>update</a>
  <a href='delete.php?id=$row[id]' class='btn btn-primary'>delete</a>
</div>
</div>



";}


?>