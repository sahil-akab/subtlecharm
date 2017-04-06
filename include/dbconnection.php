<?php
//step 1.create db connection
    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $dbname="sports";
    $connection=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(mysqli_connect_errno())
 {
     die("databse connection failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
 }
?>