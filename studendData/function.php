<?php 
function ClassName($dbServer=dbServer,$dbUser=dbUser,$dbPass=dbPass,$dbName=dbName){
	$conn=new mysqli($dbServer, $dbUser, $dbPass, $dbName);
	if($conn->connect_error){
		die("Connection failed " . $conn->connect_error);
	}
	$query="select * from StudentClass";
	$result=$conn->query($query);
	if($result){
		while($row=$result->fetch_assoc()){
			echo "<option>" . $row ['ClassName']. "</option>";
		}
	}else{
		echo "error";
	}
}
/*
function sum($a,$b){
	$total=$a+$b;
	return $total;
}
function minus($a,$b){
	$total=$a-$b;
	return $total;
}
function devide($a,$b){
	$total=($a/$b);
	return $total;
}
function multiply($a,$b){
	$total=$a*$b;
	return $total;
}
*/
?>