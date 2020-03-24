<?php 
session_start();

if(isset($_POST['submit_btn'])){
      include_once 'dbh-inc.php';

      $date = mysqli_real_escape_string($conn, $_POST['date']);
      $amount = mysqli_real_escape_string($conn, $_POST['amount']);
      $transaction = mysqli_real_escape_string($conn, $_POST['transaction']);
      $transactionid = mysqli_real_escape_string($conn, $_POST['transactionid']);
      $mode = mysqli_real_escape_string($conn, $_POST['mode']);
      $MiD = $_SESSION["ManagerID"];
      $pid = $_SESSION["projectid"];
  //Error Handlers
    if(!empty($transactionid)){
	     $sql = "SELECT * FROM transactions WHERE transactionid='$transactionid' AND porjectid = '$pid' AND managerid = '$MiD'";
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
	     	$sql = "INSERT into transactions (managerid, projectid, transactionid, tdate, amount, transaction, mode) VALUES ('$MiD', '$pid', '$transactionid', '$date', '$amount', '$transaction', '$mode');";
	     	mysqli_query($conn, $sql);
	     	header("Location: ../EmployeeHomePage.php");
	     	exit();

	     }

    }


} else {
	header("Location: ../EmployeeHomePage.php");
	exit();
}