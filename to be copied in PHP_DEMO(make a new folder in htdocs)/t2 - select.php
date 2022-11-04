<?php 
include_once 'connect.php';
 
$sql = "SELECT * FROM Employees";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "EMP_name = ".$data['EMP_name']."<br>";
    echo "EMP_ID = ".$data['EMP_ID']."<br>";
    echo "AGE = ".$data['AGE']."<br><hr>";
    echo "JOB_level = ".$data['JOB_level']."<br><hr>";
    echo "Salary = ".$data['Salary']."<br><hr>";
    echo "Airport_ID = ".$data['Airport_ID']."<br><hr>";


} ?>
