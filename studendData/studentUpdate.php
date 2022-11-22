<?php 
 include "session.php";
 include "config.php";
 include "function.php";
 include "sideNavbar.php";
 include "navbar.php";



if(isset($_GET["id"])){
	$id=$_GET["id"];
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
	if($conn->connect_error){
		die("Sorry Connection Failed " . $conn->connect_error);
	}
	
	
	$query="select * from studentinfo where id=$id";
	$result=$conn->query($query);
	
	if($result){
		while($row=$result->fetch_assoc()){
			$userName=$row["userName"];
			$password=$row["password"];
			$father=$row["father"];
			$mother=$row["mother"];
			$class=$row["class"];
			$phone=$row["phone"];
			$address=$row["address"];
		}
	}
}


if(isset($_POST['submit'])=='update studentinfo'){
	$userName=$_POST["userName"];
	$password=$_POST["password"];
	$father=$_POST["father"];
	$mother=$_POST["mother"];
	$class=$_POST["class"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
	if($conn->connect_error){
		die("Sorry You are wrong " . $conn->connect_error);
	}
	
	$query="update studentinfo set 
	userName='$userName', 
	password='$password', 
	father='$father', 
	mother='$mother', 
	class='$class', 
	phone='$phone',
	address='$address'

	where id=$id";
	$result=$conn->query($query);
	
	if($result){
		echo "insert success";
	}else{
		echo "insert not success";
	}
	
}
?>

<html>
<head>
<title></title>

<style>
.update-data {
  width: 360px;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #ffffff;
  padding:15px;
  border-radius:5px;
  width:150%
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius:5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form select {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  border-radius:5px;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4caf50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #ffffff;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .button:hover,
.form button:active,
.form button:focus {
  background: #43a047;
}


body {
  background: #76b852; /* fallback for old browsers */
  background: rgb(141, 194, 111);
  background: #fff;


}



@media only screen and (max-width: 720px){
   .form{
	   width:100%;
	  
   }
</style>
</head>
<body>
<div class="update-data">
<div class="form">
<h2>Edit A Student Data</h2>
<form method="POST" action="" class="login-form">
<p>User Name</p>
<input type="text" name="userName" value="<?php echo $userName?>"> <br>
<p>Password</p>
<input type="password" name="password" vlaue="<?php echo $password?>"> <br>
<p>Father</p>
<input type="text" name="father" vlaue="<?php echo $father?>"> <br>
<p>Mother</p>
<input type="text" name="mother" vlaue="<?php echo $mother?>"> <br>
<p>Class</p>
<input type="text" name="class" vlaue="<?php echo $class?>"> <br>
<p>Phone</p>
<input type="text" name="phone" vlaue="<?php echo $phone?>"> <br>
<p>Address</p>
<input type="text" name="address" vlaue="<?php echo $address?>"> <br>
<input class="button" type="submit" name="submit" value="Update user">
</form>
</div>
</div>
</body>
</html>

<?php 
 include "footer.php";
?>