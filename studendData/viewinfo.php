<?php
include "config.php";


if(isset($_GET["id"])){
	$id=$_GET["id"];
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
	if($conn->connect_error){
		die("connection error " . $conn->connect_error);
	}
	
	$query="select * from studentinfo where id=$id";
	$result=$conn->query($query);
	if($result){
		while($row=$result->fetch_assoc()){
			
			echo "ID: " . $row ['id']."<br>";
			echo "User Name: " . $row ['userName']."<br>";
			echo "Father's Name: " . $row ['father']."<br>";
			echo "Mother's Name: " . $row ['mother']."<br>";
			echo "Class: " . $row ['class']."<br>";
			echo "Password:" . $row ['password'];
			
		}
	}
}


 ?>
 
 <html>
 <style>
 ID{
	 border:1px solid black;
 }
 </style>
 </html>