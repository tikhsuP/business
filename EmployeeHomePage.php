<?php
include_once 'includes/dbh-inc.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags --> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
	a{color:black;}
		 a:hover {color:blue;
			text-decoration:none; 
		}
.grey{
	background-color: #e9ecef;
}
.bold{font-weight: bold;}
.table-hover tbody tr:hover{
background-color:rgba(0,0,0,.035);}

	</style>
	<title>Manager | Home</title>
</head>
<body>
	<div class="jumbotron">
		<h1>Projects</h1>
	</div>
	
<div class="container">
	<table class="table table-responsive-sm table-bordered table-hover ">
			<tr class="grey">
				<th><h5 class="bold">Date</h5></th>
				<th><h5 class="bold">Project ID</h5></th>
				<th><h5 class="bold">Project</h5></th>
			    <th><h5 class="bold">Client</h5></th>
			    <th colspan="2"><h5 class="bold">Operations</h5></th>
			</tr>

		<!--PHP -- FETCH DATA-->
		
 
  <?php  
    $MiD = $_SESSION["ManagerID"];
    $sql = "SELECT * FROM projectsss WHERE managerid = '$MiD'; ";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
  ?>
			<tr>
				<td><h5><a href="P.php?pid=<?php echo $row['projectid']?>"><?php echo $row['pdate']; ?></a></h5></td>
				<td><h5><a href="P.php?pid=<?php echo $row['projectid']?>"><?php echo $row['projectid']; ?></h5></td>
				<td><h5><a href="P.php?pid=<?php echo $row['projectid']?>"><?php echo $row['project']; ?></h5>
				</td>
			    <td><h5><a href="P.php?pid=<?php echo $row['projectid']?>"><?php echo $row['client']; ?></h5>
			    </td>
			    <td><h5 class="btn btn-sm btn-primary bold">Modify</h5></td>
			    <td><h5 class="btn btn-sm btn-primary bold">Delete</h5></td>
			</tr>

  <?php 


        }
    }
  ?>
		</table>


		
</div>


<div class="container mt-5">
	<a href="addproject.php" class="btn btn-lg btn-primary float-right" role="button"><h6>Add more...</h6></a>
	</div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>