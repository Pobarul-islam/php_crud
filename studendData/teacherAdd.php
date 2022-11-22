<?php 
include "session.php";
include "config.php";
include "teacherFunction.php";
 include "teacherSideNav.php";
 include "function.php";
if(isset($_POST['submit'])=='submit'){
	$name=$_POST["name"];
	$subject=$_POST["subject"];
	$class=$_POST["class"];
	$time=$_POST["time"];
	
	
	$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
	if($conn->connect_error){
		die("Connection error ");
	}
	
	$query="insert into teacher(name, subject, class, time ) values('$name', '$subject','$class', '$time')";
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

<?php include 'navbar.php';?>


<div class="add-data">

<div class="form">
<h2>Add A Teacher Data !</h2>
<form class="login-form" method="POST" action="">
<p>Teacher Name:</p>
<input type="text" placeholder="Name" name="name"> 
<p>Subject:</p>
<input type="password" placeholder="Subject" name="subject"> 
<p>Class:</p>
<select name="class">
<?php  ClassName();?>
</select>
<p>Time:</p>
<select name="class">
<?php  ClassTime();?>
</select>

<!--input type="text" placeholder="class" name="class"--> 

 <input class="button" name="submit" type="submit">
</form>
</div>
</div>

</body>
</html>

<?php include "footer.php" ?>