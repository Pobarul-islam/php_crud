<?php 
include "session.php";
include "config.php";
include "function.php";
 include "studentNav.php";
if(isset($_POST['submit'])=='submit'){
	$userName=$_POST["userName"];
	$password=$_POST["password"];
	$father=$_POST["father"];
	$mother=$_POST["mother"];
	$class=$_POST["class"];
	$phone=$_POST["phone"];
	$address=$_POST["address"];
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
	if($conn->connect_error){
		die("Connection error ");
	}
	
	$query="insert into studentinfo(userName, password, father, mother, class, phone, address ) values('$userName', '$password','$father', '$mother',  '$class', '$phone', '$address')";
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
<title><?php echo siteName; ?> </title>
<style>

.add-data {
  width: 360px;
  margin: auto;
  
}
.form {
  position: relative;
  z-index: 1;
  background: #ffffff;
  padding-top: 8px;
  padding-right: 30px;
  padding-bottom: 5px;
  padding-left: 30px;
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




<div class="add-data">

<div class="form">
<h2>Add A Student Data !</h2>
<form class="login-form" method="POST" action="">
User Name
<input type="text" placeholder="Enter your user name" name="userName"> 
Password
<input type="password" placeholder="Enter your password" name="password"> 
Father's Name
<input type="test" placeholder="Enter your father's name" name="father"> 
Mother's Name
<input type="text" placeholder="Enter your mother's name" name="mother"> 
<!--input type="text" placeholder="class" name="class"--> 
<select name="class">
<?php  ClassName();?>
</select>
<input type="phone" placeholder="phone" name="phone"> 
<input type="text" placeholder="address" name="address"> 
 <input class="button" name="submit" type="submit">
</form>
</div>
</div>

</body>
</html>

<?php include "footer.php" ?>