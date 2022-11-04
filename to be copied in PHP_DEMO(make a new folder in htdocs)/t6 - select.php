<?php 
include_once 'connect.php';
 
$sql = "SELECT * FROM tickets";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "Seat = ".$data['Seat']."<br>";
    echo "Price = ".$data['Price']."<br>";
    echo "PNR = ".$data['PNR']."<br><hr>";
    echo "Flight_no = ".$data['Flight_no']."<br><hr>";
    echo "timestamp = ".$data['timestamp']."<br><hr>";


} ?>
