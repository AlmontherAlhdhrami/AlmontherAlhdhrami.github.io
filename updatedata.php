<?php
#cooect with my data
include('mydata.php');
if(isset($_POST['update'])){
    $ID=$_POST['id'];
    $Name=$_POST['name'];
    $Price=$_POST['price'];
    $Image=$_FILES['image'];
    $Image_location=$_FILES['image']['tmp_name'];
    $Image_name=$_FILES['image']['name'];
    $Image_up= "images/".$Image_name;
    $update= "UPDATE product SET name='$Name', price='$Price', image='$Image_up' WHERE id=$ID";

    $result = mysqli_query($mydata,$update);

    if(move_uploaded_file($Image_location,"images/".  $Image_name)){
            echo "<script>alert('sucsuusful update')</script>";        
    }
    else{
        echo "<script>alert('faild update')</script>";         
    }
    if($result){
        header('location: index.php');
    }
    else {
        echo 'Error';
    }

}

?>