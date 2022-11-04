
<?php
include_once ('connect.php');
if ( isset($_POST['save']))
     
     $EMP_name = $_POST['EMP_name'];
     $EMP_ID = $_POST['EMP_ID'];
     $AGE = $_POST['AGE'];
     $JOB_level = $_POST['JOB_level'];
     $Salary = $_POST['Salary'];
     $Airport_ID =$_POST['Airport_ID'];
 
     $sql2 = "INSERT INTO Employees(EMP_name,EMP_ID,AGE,JOB_level,Salary,Airport_ID) 
     VALUES ('$EMP_name','$EMP_ID','$AGE','$JOB_level','$Salary','$Airport_ID')";
   
    $data2=mysqli_query($conn,$sql2);
     if ($data2) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
?>

