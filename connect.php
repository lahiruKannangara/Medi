<?php
$con=new mysqli("localhost","root","","premiumregistry");

if($con->connect_error)
{
    die("Connection failed: ". $con->connect_error);
}
?>
