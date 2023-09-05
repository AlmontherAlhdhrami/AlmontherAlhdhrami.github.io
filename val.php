<?php
include('mydata.php');
$ID=$_GET['id'];
//work with data by id
$up=mysqli_query($mydata,"select * from product where id=$ID");
$data=mysqli_fetch_array($up);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تأكيد شراء المنتج</title>
    <style>
        input{display: none;}
        .main{width: 30%;
        padding: 20px;
        box-shadow: 1px 1px 10px silver;
        margin-top: 50px;
    }
    </style>
</head>
<body>
    <center>
        <div class="main">

        <form action="insert_card.php" method="post">
           <h2>هل تريد شراء المنتج؟</h2>
        
            <input type="text" name="id" value='<?php  echo $data['id']?>' >
         
            <input type="text" name="name" value='<?php  echo $data['name']?>'>
      
            <input type="text" name="price" value='<?php  echo $data['price']?>' >
            <button type="submit" name="add" class='btn btn-warning'>تأكيد إضافة المنتج للعربة</button>
        </form> 
         <br>
        <a href="shop.php"> back</a>
    </div>
      
    </center>
</body>
</html>