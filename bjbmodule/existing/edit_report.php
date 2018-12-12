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
    width: 50px;
    max-width: 50px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;	
		border:1px solid grey;
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

a#delete_td {
    text-decoration: none;
    color: white;
    font-weight: bold;
    background: red;
}

td#edit_td {
	   background: #4CAF50;
}

td#delete_td {
    background: red;
}

</style>
</head>
<body style="font-family: Arial,Helvetica,sans-serif;color: #222;font-size: 13px;">
<?php
$con = mysqli_connect('localhost','anurudee','ironport','ciscoamp_db');
$query = "SELECT * FROM form WHERE srnum IN (".$C3SRNumber.") ORDER BY id DESC LIMIT 5";
$result = mysqli_query ($con, $query); ?>
<table style="width:100%;border: 3px solid green;border-collapse: collapse;background: #c7f1d6;color: green;font-weight: bold;">
<?php 
while ($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr align="center">
<td class="wrap"><span><?php echo $row['dateposted']; ?></span></td>
<td class="wrap"><span><?php echo $row['us_name']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text1']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text2']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text3']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text4']; ?></span></td>
<td id="edit_td" class="wrap"><span><a id="edit_btn" href="edit.php?id=<?php echo $row['id']; ?>&username=<?php echo $username;?>&tech=<?php echo $tech;?>&subtech=<?php echo $subtech;?>&Priority=<?php echo $Priority;?>&ProblemCode=<?php echo $ProblemCode;?>&ResolutionCode=<?php echo $ResolutionCode;?>&C3SRNumber=<?php echo $C3SRNumber;?>&DateCreated=<?php echo $DateCreated;?>&DateClosed=<?php echo $DateClosed;?>">Edit</a></span></td>
<td id="delete_td" class="wrap"><span><a id="delete_td" href="delete.php?id=<?php echo $row['id']; ?>&username=<?php echo $username;?>&tech=<?php echo $tech;?>&subtech=<?php echo $subtech;?>&Priority=<?php echo $Priority;?>&ProblemCode=<?php echo $ProblemCode;?>&ResolutionCode=<?php echo $ResolutionCode;?>&C3SRNumber=<?php echo $C3SRNumber;?>&DateCreated=<?php echo $DateCreated;?>&DateClosed=<?php echo $DateClosed;?>">Delete</a></span></td>
</tr>
</tbody>
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