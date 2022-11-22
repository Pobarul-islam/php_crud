<?php
session_start();
include "config.php";
$userName=$_POST["userName"];
$password=$_POST["password"];

$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
if($conn->connect_error){
	die("connection error " . $conn->connect_error);
}

$query="select * from studentinfo";
$result=$conn->query($query);
$Login=0;
$_SESSION['login']=0;
	if($result){
		while($row=$result->fetch_assoc()){
			if($userName==$row["userName"] && $password==$row["password"]){
				$Login=1;
				$_SESSION['UserName']=$row["userName"];
				$_SESSION['login']=1;
			}
		}
		if($Login==1){
			//echo "Yea! You are success";
			//echo $_SESSION['login'];
			header('Location: dashboard.php');
		}else{
			echo "sorry login error";
			$_SESSION['login']=0;
		}
	}	
?>