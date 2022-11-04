
<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     $Airline_ID =$_POST['Airline_ID'];
     $Planes_owned = $_POST['Planes_owned'];
     $Name = $_POST['Name'];
     
 
     $sql4 = "INSERT INTO Airline_Companies(Airline_ID,Planes_owned,Name) 
     VALUES ('$Airline_ID','$Planes_owned','$Name')";
   
    $data4=mysqli_query($conn,$sql4);
     if ($data4) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql4 . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>