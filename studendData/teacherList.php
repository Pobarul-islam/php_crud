<?php
include "config.php";
include "teacherSideNav.php";
include "teacherNav.php";

$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
if($conn->connect_error){
	die("connect_error " . $conn->connect_error);
}

$query="select * from teacher";
$result=$conn->query("$query");

echo "<table> <tr>";
echo "<td>ID</td>";
echo "<td>Name</td>";
echo "<td>Subject</td>";
echo "<td>Class</td>";
echo "<td>Time</td>";
echo "<td> Edit</td>";
echo "<td> View</td>";

if($result){
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row ['id']."</td>";
		echo "<td>" . $row ['name']."</td>";
		echo "<td>" . $row ['subject']."</td>";
		echo "<td>" . $row ['class']."</td>";
		echo "<td>" . $row ['time']."</td>";;
		echo "<td> <a href='studentUpdate.php ?id=".$row['id']."'>Edit</a> </td>";
		echo "<td> <a href='viewinfo.php ?id=".$row['id']."'>View</a> </td>";
		echo "</tr>";
		
	}
}else{
	echo "error";
}
echo "</table>";
 ?>
 

<html>
<head>
<style>
 td{
	 text-decoration:none;
 }
 table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin:auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
@media(max-width:500px){
	table{
		font-size:13px;
	}
}

footer{
	margin-top:13%;
	padding-bottom:5px;
}
 </style>
</head>
</html>