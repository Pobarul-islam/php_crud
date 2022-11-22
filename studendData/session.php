<?php
session_start();
if (isset($_SESSION['login'])==1){
	$UserName=$_SESSION['UserName'];
}else{
	header('Location: index.php');
}
?>