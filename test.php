
<?php
//Linking the configuration file
require "connect.php";

if(isset($_POST["register"])){
	$fname = $_POST["fn"];
    $lname = $_POST["ln"];
    $uname = $_POST["un"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $htele = $_POST["htele"];
    $mnum = $_POST["mnum"];
    $address = $_POST["address"];	

	$sql= "INSERT INTO regcus(fn,ln,un,pwd,email,ht,mt,ad)VALUES('$fname','$lname','$uname','$password','$email','$htele','$mnum','$address')";
		if($con->query($sql)){
			echo "Inserted successfully";
		}
		else{
			echo "Error:". $con->error;
		}
}
$con->close();
?>