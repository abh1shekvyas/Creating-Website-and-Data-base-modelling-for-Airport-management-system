<?php 
include_once 'connect.php';
 
$sql = "SELECT * FROM Airline_Companies";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "Airline_ID = ".$data['Airline_ID']."<br>";
    echo "Planes_owned = ".$data['Planes_owned']."<br>";
    echo "Name = ".$data['Name']."<br><hr>";


} ?>
