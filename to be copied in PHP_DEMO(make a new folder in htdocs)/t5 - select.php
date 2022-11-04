<?php 
include_once 'connect.php';
 
$sql = "SELECT * FROM passengers";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "Customer_id = ".$data['Customer_id']."<br>";
    echo "Address = ".$data['Address']."<br>";
    echo "Name = ".$data['Name']."<br><hr>";
    echo "PNR = ".$data['PNR']."<br><hr>";
    echo "Flight_no = ".$data['Flight_no']."<br><hr>";
    echo "Airline_ID = ".$data['Airline_ID']."<br><hr>";


} ?>
