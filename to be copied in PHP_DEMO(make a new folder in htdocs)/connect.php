<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = 'dbms_assignment4';
    $conn=mysqli_connect($host,$username,$password,$dbname);
    if(!$conn)
        {
          die('Could not Connect to Server:' .mysqli_connect_error());
        }
        echo"Connection Succeeds";

?>