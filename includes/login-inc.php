<?php
session_start();

if(isset($_POST['login']))
{
	  include_once 'dbh-inc.php';
	  $managerid = mysqli_real_escape_string($conn, $_POST['managerid']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
      //error handlers
    if((!empty($managerid)) && (!empty($pwd)))
    {
    	if(($managerid == 'Admin') && ($pwd == 'kingadmin123'))
    	{ 
    		header("Location: ../AdminPage.php");
    		exit();
    	}
       else{
       	       $sql = " SELECT * FROM users WHERE managerid = '$managerid'";
    	       $result = mysqli_query($conn, $sql);
    	       $resultCheck = mysqli_num_rows($result);
    	       if ($resultCheck < 1)
    	       {
    		    echo "incorrect id";
    		    exit();
    	       } else 
    	           {
    		          if ($row = mysqli_fetch_assoc($result))
    		          {
    			           //DE-HASHING
    			           //$hashPwdCheck = password_verify($pwd, $row['pwd']);
                        
    			           if ($pwd != $row['pwd'])
    			           {
    				          echo "incorrect password";
    				          exit();
    			           } elseif($pwd == $row['pwd'])
    			                  {    
                                     
                                     $_SESSION["ManagerID"] = $managerid;
                                     header("Location: ../EmployeeHomePage.php");
    				                 exit();
    			                   }
    			       }
    		        }
    	    }
    }

} 

else {
	header("Location: ../inde.php");
	exit();
}
