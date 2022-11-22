<?php 
function ClassTime($dbServer=dbServer,$dbUser=dbUser,$dbPass=dbPass,$dbName=dbName){
	$conn=new mysqli($dbServer, $dbUser, $dbPass, $dbName);
	if($conn->connect_error){
		die("Connection failed " . $conn->connect_error);
	}
	$query="select * from 	teachertime";
	$result=$conn->query($query);
	if($result){
		while($row=$result->fetch_assoc()){
			echo "<option>" . $row ['time']. "</option>";
		}
	}else{
		echo "error";
	}
}

?>

