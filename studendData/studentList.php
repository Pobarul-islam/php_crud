<?php
include "session.php";
include "config.php";
include "studentSideNav.php";
include "navbar.php";

$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
if($conn->connect_error){
	die("connection error " . $conn->connect_error);
}

$query="select * from studentinfo";
$result=$conn->query($query);
	echo "<table> <tr>";
	echo "<th>ID</th>";
	echo "<th>User Name</th>";
	echo "<th>Father</th>";
	echo "<th>Mother</th>";
	echo "<th>Class</th>";
	echo "<th>Password</th>";
	echo "<th>Edit</th>";
	echo "<th>View</th>";
	echo "</tr>";
if($result){
	while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>" . $row ['id']."</td>";
		echo "<td>" . $row ['userName']."</td>";
		echo "<td>" . $row ['father']."</td>";
		echo "<td>" . $row ['mother']."</td>";
		echo "<td>" . $row ['class']."</td>";
		echo "<td>" . $row ['password']."</td>";
		echo "<td> <a href='studentUpdate.php ?id=".$row['id']."'>Edit</a> </td>";
		echo "<td> <a href='viewinfo.php ?id=".$row['id']."'>View</a> </td>";
		echo "</tr>";
		
	}
}else{
	echo "error";
}
echo "</table>";

 ?>
 
 
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
<?php 
include "footer.php";
?>