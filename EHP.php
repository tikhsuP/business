<?php
include_once 'includes/dbh-inc.php';
session_start();
$managerid = mysqli_real_escape_string($conn, $_GET['id']);
$_SESSION["ManagerID"] = $managerid;
header("Location: EmployeeHomePage.php");
