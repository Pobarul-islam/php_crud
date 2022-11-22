<?php 
include "session.php";
include "function.php";
include "config.php";
include "studentSideNav.php"

 ?>


<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>student invoice</title>
	
	
	 <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.bootstrap4.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white">
  <div class="container-fluid">
    <a class="navbar-brand position-absolute top-0 start-50 translate-middle mt-4" href="dashboard.php">StudentData</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link  fs-5" aria-current="page" href="studentNav.php">Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5" href="teacherNav.php">Teacher</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>




<!-- Form -->
<form class="w-50 m-auto">
  
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer ID</label>
	<!-- Input class -->
    <input type="CustomerID" class="form-control _customerID" id="exampleInputEmail1" aria-describedby="emailHelp" autofocus="off" readonly>
  
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Customer Name</label>
	<!-- input class -->
    <input type="CustomerName" class="form-control _customerName" id="exampleInputPassword1" autofocus="off" readonly>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>
</form>

<!-- from end -->





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <table id="table1" class="table table-striped table-hover">
		<thead>
		<tr>
		<th>Student ID: </th>
		<th>Student Name:</th>
		<th>Action: </th>
		</tr>
		</thead>
		
		<tbody>
		 <?php 
			$conn=new mysqli(dbServer, dbUser, dbPass, dbName);
			if($conn->connect_error){
				die("connection error " . $conn->connect_error);
			}
			
			$query="select * from studentinfo";
			$result=$conn->query($query);
			
			if($result){
				while($row=$result->fetch_assoc()){
					echo "<tr><td>".$row['id']."</td>";
					echo "<td>".$row['userName']."</td>";
					echo "<td>
						<a href='#' class='selected' 
							attr-CustomerID=".$row['id']."  
							attr-CustomerName='".$row['userName']."'
						>select</a>
					</td>";
					echo "</tr>"; 
					
				}
			}
		?>
	
		</tbody>
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>

