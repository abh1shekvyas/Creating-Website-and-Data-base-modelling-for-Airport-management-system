<?php 
include_once 'connect.php';
 
$sql = "SELECT * FROM Flights_";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "Airport_name = ".$data['Airport_name']."<br>";
    echo "Airport_arrival = ".$data['Airport_arrival']."<br>";
    echo "Flight_no = ".$data['Flight_no']."<br><hr>";
    echo "PublicorPrivate = ".$data['PublicorPrivate']."<br><hr>";
    


} ?>
