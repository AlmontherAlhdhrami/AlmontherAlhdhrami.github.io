<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مشترياتي</title>
    <style>
    main{width: 40%;margin-top: 30px;}
   
    table{box-shadow: 1px 1px 10px saddlebrown;}
    thead{background-color:gray;}
    </style>
</head>
<body>
    
    <center>
    <h3>مشترياتك</h3></center>
   <?php 
   include('mydata.php');
   $rsult=mysqli_query($mydata,"SELECT * FROM card");
   while($row=mysqli_fetch_array($rsult)){
         echo"
         
         <center>
        <main>
            <table class='table'>

            <thead><tr>
                <th scope='col'> product name</th>
                <th scope='col'> price of product</th>
                <th scope='col'> delete product</th>
        </tr></thead>
        <tbody>
           <tr>
            <td>$row[name]</td>
            <td>$row[price]</td>
            <td><a href='delet_card.php?id=$row[id]' class='btn btn-danger'> delete</a></td>
           </tr>

        </tbody>
            </table>
        </main>
    </center>
         
         
         
         
         ";


   }
   
   ?>
   <center><a href="shop.php">back to productpage</a></center>
</body>
</html>


