<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     $Customer_id =$_POST['Customer_id'];
     $Address =$_POST['Address'];
     $Name = $_POST['Name'];
     $PNR = $_POST['PNR'];
     $Flight_no = $_POST['Flight_no'];
     $Airline_ID = $_POST['Airline_ID'];

     $sql5 = "INSERT INTO passengers(Customer_id,Address,Name,PNR,Flight_no,Airline_ID) 
     VALUES ('$Customer_id','$Address','$Name','$PNR','$Flight_no','$Airline_ID')";
   
    $data5=mysqli_query($conn,$sql5);
     if ($data5) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql5 . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>