<?php 
if(isset($_POST['submit_btn'])){
      include_once 'dbh-inc.php';

      $date = mysqli_real_escape_string($conn, $_POST['date']);
      $state = mysqli_real_escape_string($conn, $_POST['state']);
      $manager = mysqli_real_escape_string($conn, $_POST['manager']);
      $managerid = mysqli_real_escape_string($conn, $_POST['managerid']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

  //Error Handlers
    if(!empty($managerid)){
	     $sql = "SELECT * FROM users WHERE managerid='$managerid'";
	     $result = mysqli_query($conn, $sql);
	     $resultCheck = mysqli_num_rows($result);
	     if($resultCheck > 0){
	    	//error message 
	    	echo "already exists";
	    	exit();
	     } else {
	     	//hashing
	     	//$hashPwd = password_hash($pwd, PASSWORD_DEFAULT);
	     	//INSERT INTO DB
	     	$sql = "INSERT into users (date, state, manager, managerid, pwd) VALUES ('$date', '$state', '$manager', '$managerid', '$pwd');";
	     	mysqli_query($conn, $sql);
	     	header("Location: ../AdminPage.php");
	     	exit();

	     }

    }


} else {
	header("Location: ../inde.php");
	exit();
}