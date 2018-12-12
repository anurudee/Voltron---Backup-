<?php

$username =$_GET['username'];
$tech =$_GET['tech'];
$subtech =$_GET['subtech'];
$Priority =$_GET['Priority'];
$ProblemCode =$_GET['ProblemCode'];
$ResolutionCode =$_GET['ResolutionCode'];
$C3SRNumber =$_GET['C3SRNumber'];
$DateCreated =$_GET['DateCreated'];
$DateClosed =$_GET['DateClosed'];
$id =$_GET['id'];

//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM form WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:edit_report.php?id=$id&C3SRNumber=$C3SRNumber");
?>