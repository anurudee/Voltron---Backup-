<?php
session_start();
// the below will clear any undefined index error
error_reporting(E_ERROR | E_PARSE);
?>
<?php 
$username =$_GET['username'];
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<link rel="icon" href="https://voltron.cisco.com/UAEsc/img/logo.png" width type="image/ico">
<title>Voltron</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
</head>
<body>
<?php
$con = mysqli_connect('localhost','anurudee','ironport','manageampusers');
$query = "SELECT * FROM login WHERE u_name ='".$username."' AND permission='L2'";
$result = mysqli_query ($con, $query); 
?>

<?php 
while ($row = mysqli_fetch_assoc($result)) {
?>

<div>
<p>
Test
</p>

</div>

<?php 
};
?>

</body>
</html>