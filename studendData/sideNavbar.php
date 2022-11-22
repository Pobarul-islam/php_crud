<?php

 ?>
<html>
<head>
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: none;
  
  padding: 0;
  width: 150px;

  background-color: #fff;
  position: fixed;

  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #04AA6D;
  color: black;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
 
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;

    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}


@media only screen and (max-width: 720px){
   .sidebar{
	   visibility:hidden;
   }
}
</style>
</head>
<body>

<div class="sidebar">
  <a class="active" href="dashboard.php">Home</a>
  <a href="studentList.php">Data List</a>
  <a href="studentNav.php">Student Add</a>
  <a href="help.php">Help</a>
</div>
<div class="content">
  
</div>

</body>
</html>
