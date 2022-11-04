<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     $Seat =$_POST['Seat'];
     $Price = $_POST['Price'];
     $PNR = $_POST['PNR'];
     $Flight_no = $_POST['Flight_no'];
     $timestamp = $_POST['timestamp'];

     $sql6 = "INSERT INTO tickets(Seat,Price,PNR,Flight_no,timestamp) 
     VALUES ('$Seat','$Price','$PNR','$Flight_no','$timestamp')";
   
    $data6=mysqli_query($conn,$sql6);
     if ($data6) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql6 . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>