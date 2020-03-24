<?php
include_once 'includes/dbh-inc.php';
session_start();
$projectid = mysqli_real_escape_string($conn, $_GET['pid']);
$_SESSION["projectid"] = $projectid;
header("Location: Project.php");
