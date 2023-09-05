<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <style>
        body{background-color: black}
      .main{
        width: 70%;
        height: 90%;
   
        padding: auto;
        box-shadow:1px 1px 10px lightblue ;
        background-color:bisque;
      }
      h2{
        padding: 10px;
      margin: 10px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        lighting-color:aqua;
      }
      input{
        margin-bottom: 10px;
        width:60%;
        padding: 5px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: medium;
        font-weight: bolder;
      }
      button {padding: 10px;
        
        color:aqua;
        padding: 10px;
        width: 30%;
        margin: 10px;
        font-size: 15px;
        background-color:black;
        border: solid;
    }
    #lfile{
        padding: 10px;
        width: 30%;
        margin: 10px;
        font-size: 15px;
        background-color:black;
        border: solid;

    }
    a{ text-decoration: none;
      color:aqua;
      margin: 10px;
        padding: 5px;
        width: 30%;
      
        font-size: 15px;
        background-color:black;
        border: solid;
    }
    img{ padding: 10px;
      margin: 10px;
      z-index: -1;
    opacity: 1;}
    footer{position:absolute;
    top: 100%;
    left:50%;

  }
    </style>
</head>
<body>
<?php
include('mydata.php');
$Id=$_GET['id'];

$update=mysqli_query($mydata,"select  * from  product where id=$Id");
$data=mysqli_fetch_array($update);

?>
    <center>
       <div class="main">
        <form  action="updatedata.php" method="post" enctype="multipart/form-data">
            <h2 style=" color:black">update products</h2>
            <img src="mylogo.jpg" alt="" width="450px">
            <br>
            <input type="text" name="id" id="" placeholder="id" value=<?php echo $data['id']?>>
            <br>
            <br>
            <input type="text" name="name" id="" placeholder="name of product" value=<?php echo $data['name']?>>
            <br>
            <br>
        
            <input type="text" name="price" id="" placeholder="price of product" value=<?php echo $data['price']?>>
            <br>
            <br>
<span>
            <label for="file" style="cursor:grab ;color:aqua;" id="lfile"> <b>update image</b></label>
             <input type="file" name="image" id="file" style="display:none; ">
             
             <input type="submit" name="update" value="update" class="buttom">
             
            </span>
              
        </form>
       </div>
    </center>
    <footer> <center><p style="color:aliceblue">devoloper by Almonther</p></center></footer>
</body>
</html>

