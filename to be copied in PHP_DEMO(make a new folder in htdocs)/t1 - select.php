<?php 
include_once 'connect.php';

 
$sql = "SELECT * FROM airports";
 
$query = mysqli_query($conn,$sql);
 
if(!$query)
{
    echo "Query does not work.".mysqli_error($conn);die;
}
 while($data = mysqli_fetch_array($query))
{
      echo "Airport_ID = ".$data['Airport_ID']."<br>";
    echo "Airport_name = ".$data['Airport_name']."<br>";
    echo "City = ".$data['City']."<br><hr>";} ?>
