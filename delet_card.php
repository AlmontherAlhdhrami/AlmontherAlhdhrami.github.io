<?php 
   include('mydata.php');
  $ID=$_GET['id'];
  mysqli_query($mydata,"DELETE FROM card WHERE id=$ID");
  header("location:card.php")
   ?>