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
    .grey{border-radius: 4px;
    background-color: #e9ecef;}
    .shift{
        margin:0.25em auto 0.15em 0.50em;
    }

</style>
	<title>Manager | Add Project</title>
</head>

<body><div class="jumbotron">
<h1>Welcome Manager | Add Project</h1></div>
	<form role="form" action= "includes/addproject-inc.php" method="POST" class="form-group">
<div class="container">
    <div class="form-group"><div class="grey">
    <label for="date"><h6 class="shift">Date</h6></label></div>
    <input type="date" class="form-control" name="date" id="date" required autofocus>
    </div>
    <div class="form-group"><div class="grey">
    <label for="projectid"><h6 class="shift">Project ID</h6></label></div>
    <input type="text" class="form-control" name="projectid" id="projectid" required autofocus>
    </div>
    <div class="form-group"><div class="grey">
    <label for="project"><h6 class="shift">Project</h6></label></div>
    <input type="text" class="form-control" name="project" id="project" required autofocus>
    </div>
    <div class="form-group"><div class="grey">
    <label for="client"><h6 class="shift">Client</h6></label></div>
    <input type="text" class="form-control" name="client" id="client" required autofocus>
    </div>

</div>


<div class="container mt-5">
<button type="submit" name="submit_btn" class="btn btn-lg btn-primary float-right" role="button"><h6>Submit</h6></button>
</form>

	 
			
	
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="
    sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>