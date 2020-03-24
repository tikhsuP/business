<?php 
include_once 'dbh-inc.php';
session_start();

if(isset($_POST['submit_btn'])){
      

      $date = mysqli_real_escape_string($conn, $_POST['date']);
      $projectid = mysqli_real_escape_string($conn, $_POST['projectid']);
      $project = mysqli_real_escape_string($conn, $_POST['project']);
      $client = mysqli_real_escape_string($conn, $_POST['client']);
      $MiD = $_SESSION["ManagerID"];
      $_SESSION["projectid"] = $projectid;
      $pid = $_SESSION["projectid"];

  //Error Handlers
    if(!empty($projectid)){
	     $sql = "SELECT * FROM projectsss WHERE projectid = '$projectid' AND managerid = '$MiD'";
	     $result = mysqli_query($conn, $sql);
	     $resultCheck = mysqli_num_rows($result);
	     if($resultCheck > 0){
	    	//error message 
	    	echo "already exists";
	    	exit();
	     } else {
	     	
	     	
	     	//INSERT INTO DB
	     	$sql = "INSERT INTO projectsss (pdate, projectid, project, client, managerid) VALUES ('$date', '$pid', '$project', '$client', '$MiD');";
	     	mysqli_query($conn, $sql);
	     	header("Location: ../EmployeeHomePage.php");
	     	exit();

	     }

    }


} else {
	header("Location: ../EmployeeHomePage.php");
	exit();
}