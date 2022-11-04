
<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     $Airport_name =$_POST['Airport_name'];
     $Airport_arrival = $_POST['Airport_arrival'];
     $Flight_no = $_POST['Flight_no'];
     $PublicorPrivate = $_POST['PublicorPrivate'];
     
 
     $sql3 = "INSERT INTO Flights_(Airport_name,Airport_arrival,Flight_no,PublicorPrivate) 
     VALUES ('$Airport_name','$Airport_arrival','$Flight_no','$PublicorPrivate')";
   
    $data3=mysqli_query($conn,$sql3);
     if ($data3) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql3 . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>