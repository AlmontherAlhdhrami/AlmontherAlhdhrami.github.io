<?php
include('mydata.php');
if(isset($_POST['add'])){
     $Name=$_POST['name'];
     $price=$_POST['price'];
     $insert="INSERT INTO  card (name,price) VALUES ('$Name','$price')";
     mysqli_query($mydata,$insert);
     header('location: card.php');
    }
?>