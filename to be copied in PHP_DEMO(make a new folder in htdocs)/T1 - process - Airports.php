<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     $Airport_ID =$_POST['Airport_ID'];
     $Airport_name =$_POST['Airport_name'];
     $City = $_POST['City'];
     
 
     $sql = "INSERT INTO airports(Airport_ID,Airport_name,City) 
     VALUES ('$Airport_ID','$Airport_name','$City')";
  
    $data=mysqli_query($conn,$sql);

     if ($data) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
 ?>

