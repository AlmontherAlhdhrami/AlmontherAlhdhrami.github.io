<?php
#cooect with my data
include('mydata.php');
if(isset($_POST['uplode'])){
    $Name=$_POST['name'];
    $Price=$_POST['price'];
    $Image=$_FILES['image'];
    $Image_location=$_FILES['image']['tmp_name'];
    $Image_name=$_FILES['image']['name'];
    $Image_up= "images/".  $Image_name;
    $insert= "INSERT INTO product (name,price,image) VALUES ('$Name','$Price','$Image_up')";
    $result = mysqli_query($mydata,$insert);
    
    if(move_uploaded_file( $Image_location,"images/".  $Image_name)){
            echo "<script>alert('sucsuusful uplode')</script>";        
    }
    else{
        echo "<script>alert('faild uplode')</script>";         
    }
    if($result){
        header('location: index.php');
    }
    else {
        echo 'Error';
    }



}

?>