<?php 
include "config.php";
if(isset($_POST['submit'])=='submit'){
	$userName=$_POST["userName"];
	$password=$_POST["password"];
	$father=$_POST["father"];
	$mother=$_POST["mother"];
	$class=$_POST["class"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName, sFatherName, sMotherName, sClass, sPhone, sAddress);
	if($conn->connect_error){
		die("Connection error " . $conn->connect_error);
	}
	
	$query="insert into studentinfo(userName, password, father, mother, class, phone, address ) values('$userName', '$password',$father, $mother,  $class, $phone, $address )";
	$result=$conn->query($query);
	
	if($result){
		echo "insert success";
	}else{
		echo "insert not success";
	}
}
?>