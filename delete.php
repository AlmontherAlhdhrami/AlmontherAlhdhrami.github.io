<?php  

include('mydata.php');

$Id=$_GET['id'];

echo "<script> alert('are you shower do you want delate product')</script>";
$del = "DELETE FROM product WHERE id=$Id";
$result = mysqli_query($mydata,$del);

if ($result) {
    mysqli_close($mydata);
    header('location: product.php');
    exit();
} else {
    echo "Error deleting record";
}
  




?>