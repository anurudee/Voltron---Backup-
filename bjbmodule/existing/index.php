<?php
session_start();
// the below will clear any undefined index error
error_reporting(E_ERROR | E_PARSE);
?>
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
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<link rel="icon" href="https://voltron.cisco.com/UAEsc/img/logo.png" width type="image/ico">
<!-- Refresh Content -->
<meta http-equiv="refresh" content="5" >
<title>Voltron</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="js.js"></script>
<style>
select {
    width: 150px;
	margin-right: 10px;
}

a.toolscap {
    margin: 10px;
    border: none;
    color: black;
    text-decoration: none;
    padding: 3px;
}

a.toolscap:hover {
    background: lightgray;
}
	
input#lletsubmit {
    border: none;
    padding: 3px;
    width: 70%;
    color: white;
    font-weight: bold;
	border-radius: 5px;
}	

input#lletsubmit:hover {
	background:green;

}

td.wrap {
    width: 100px;
    max-width: 100px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;	
}

td.wrap:hover {
	white-space: normal;
    overflow: visible ;
	text-overflow : visible ;
}
td.wrap:hover span {
    display: block;	
}

input[type="radio"] {
    margin-left: 11px;
}

button.btn.btn-info.btn-lg:hover {
	background: #83A2CF;
	color:white;
}

a#edit_btn {
    text-decoration: none;
    font-weight: bold;
    background: #4CAF50;
    color: white;
}

td#edit_td {
	   background: #4CAF50;
}

</style>
</head>
<body style="font-family: Arial,Helvetica,sans-serif;color: #222;font-size: 13px;">
<?php
$con = mysqli_connect('localhost','anurudee','ironport','ciscoamp_db');
$query = "SELECT * FROM form WHERE srnum IN (".$C3SRNumber.") ORDER BY id DESC LIMIT 1";
$result = mysqli_query ($con, $query); ?>
<table style="width: 98%;border:3px solid #6CC04A;border-collapse: collapse;margin: 0px 0px 0px 4px;background:#c7f1d6;">
<?php 
while ($row = mysqli_fetch_assoc($result)) {
?>
<thead>
<tr align="center" style="color:green;font-weight:bold;">
<td colspan="8" class="wrap"><span><?php echo 'To modify current entry selections click on the edit option below'; ?></span></td>
</tr>
</thead>	
<?php };
?>
</table>
<script type = "text/javascript" language = "javascript">
$("td:contains('Host')").css("color", "Green");
$("td:contains('Attendee')").css("color", "Green");
$("td:contains('Site Admin')").css("color", "Orange");
$("td:contains('Partner')").css("color", "Red");
$("td:contains('Employee')").css("color", "Blue");
$("td:contains('Billing Contact')").css("color", "#cc33cc");
</script>
</body>
</html>