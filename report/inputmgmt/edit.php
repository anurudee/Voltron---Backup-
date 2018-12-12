<?php
// including the database connection file
include_once("config.php");
if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$step_active = mysqli_real_escape_string($mysqli, $_POST['step_active']);
	$step_apreason = mysqli_real_escape_string($mysqli, $_POST['step_apreason']);
	$step_reason = mysqli_real_escape_string($mysqli, $_POST['step_reason']);
	$test_step1 = mysqli_real_escape_string($mysqli, $_POST['test_step1']);
	$new_step1 = mysqli_real_escape_string($mysqli, $_POST['new_step1']);
	$test_step2 = mysqli_real_escape_string($mysqli, $_POST['test_step2']);
	$new_step2 = mysqli_real_escape_string($mysqli, $_POST['new_step2']);
	$test_step3 = mysqli_real_escape_string($mysqli, $_POST['test_step3']);
	$new_step3 = mysqli_real_escape_string($mysqli, $_POST['new_step3']);
	$test_step4 = mysqli_real_escape_string($mysqli, $_POST['test_step4']);
	$new_step4 = mysqli_real_escape_string($mysqli, $_POST['new_step4']);

		//updating the table
		$result = mysqli_query($mysqli, "UPDATE form SET new_step1='$new_step1',new_step2='$new_step2',new_step3='$new_step3',new_step4='$new_step4',step_active='$step_active' WHERE id=$id");
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
}
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>Overall Report</title>
<link rel="icon" href="https://voltron.cisco.com/amp/img/logo.png" width type="image/ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="style/style.css">
<link rel='stylesheet prefetch' href='style/boot.css'>
<link rel="stylesheet" type="text/css" href="style/style1.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script src="js/js.js"></script>
<script src="js/script.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
function settingClock() {
        var today = new Date();
        var hour = today.getHours();
        var minute = today.getMinutes();
        var second = today.getSeconds();
        if(hour < 10) {
                hour = "0" + hour; 
        } 
        if (minute < 10) {
                minute = "0" + minute;
        }
        if (second < 10) {
                second = "0" + second;
        }
        var frame = document.getElementById("box");
        frame.innerHTML = hour + ":" + minute + ":" + second;    
}
setInterval(settingClock, 500);
</script>
<script>
function settingClock() {
        var today = new Date();
        var hour = today.getHours();
        var minute = today.getMinutes();
        var second = today.getSeconds();
        if(hour < 10) {
                hour = "0" + hour; 
        } 
        if (minute < 10) {
                minute = "0" + minute;
        }
        if (second < 10) {
                second = "0" + second;
        }
        var frame = document.getElementById("box1");
        frame.innerHTML = hour + ":" + minute + ":" + second;    
}
setInterval(settingClock, 500);
</script>
<style id="__web-inspector-hide-shortcut-style__" type="text/css">
.__web-inspector-hide-shortcut__, .__web-inspector-hide-shortcut__ *, .__web-inspector-hidebefore-shortcut__::before, .__web-inspector-hideafter-shortcut__::after
{
    visibility: hidden !important;
}
</style>

<style>
body { Arial,Helvetica,sans-serif; background-color: #f8f8f8;}
.mySlides {display: none}
</style>
<script src="js/sorttable.js"></script>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://voltron.cisco.com/amp/mainpage.php" class="w3-bar-item w3-button w3-padding-large"><img class="vlogo" src="https://voltron.cisco.com/amp/img/logo.png" /></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Menu <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
	<a href="https://voltron.cisco.com/amp/report/supview/index.php" class="w3-bar-item w3-button">Supervisor View</a>
	<a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" class="w3-bar-item w3-button">Input Management</a>
		<a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" class="w3-bar-item w3-button">Detractor Management</a>
		<a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" class="w3-bar-item w3-button">Dashboard</a>
      </div>
    </div>
<a href="#" class="w3-bar-item w3-button w3-padding-large"><div id="box"></div></a>
<a style="text-decoration:none;" href="#" class="w3-padding-large w3-hover-red w3-hide-small w3-right">
<?php
// Echo session variables that were set on previous page
echo "" . $_SESSION["us_name"] . "<br>"; ?> 
</a>
    <a style="text-decoration:none;" href="https://voltron.cisco.com/amp/login/index.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Logout</a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:59px">
  <a href="https://voltron.cisco.com/amp/report/supview/index.php" class="w3-bar-item w3-button w3-padding-large">Supervisor View</a>
  <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Input Management</a>
  <a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Detractor Management</a>
  <a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" class="w3-bar-item w3-button w3-padding-large" >Dashboard</a>  
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" id="band">
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
	  
<!-- DropDowns on first flex -->
	  
<div class="w3-round w3-margin-bottom">

<?php
//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * , TIME_FORMAT(TIMEDIFF(dateposted,strtime),'%H:%i:%s') AS comp FROM form WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$step_active = $res['step_active'];
	$step_apreason = $res['step_apreason'];
	$step_reason = $res['step_reason'];
	$test_step1 = $res['test_step1'];
	$new_step1 = $res['new_step1'];
	$test_step2 = $res['test_step2'];
	$new_step2 = $res['new_step2'];
	$test_step3 = $res['test_step3'];
	$new_step3 = $res['new_step3'];
	$test_step4 = $res['test_step4'];
	$new_step4 = $res['new_step4'];
	
}
?>
<h2><a class="f1a">Edit </a><a class="f2a">Inputs</a></h2>
<a class="timer">
<?php
$hostname="localhost";
$username="anurudee";
$password="ironport";
$db = "ciscoamp_db";
$dbh = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);
foreach($dbh->query('SELECT CURDATE()') as $row) {
echo "<tr>";
echo "<td>" . $row['CURDATE()'] . "</td>";
echo "</tr>";
}
?>
</a>
<a id="box1" title='Live PST Time'></a>
<br>
<a class="addinp" href="index.php"><span>Back to Agents Input</span></a>
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="table-responsive">
<form name="form1" method="post" action="edit.php">
<table border="0">
			<tr>
			<td class="head"><?php echo $id;?></td>
			</tr>
			<tr> 
				<td><b>Input 1 : </b></td>
				<td><input Readonly class="addinpt1" type="text" name="test_step1" value="<?php echo $test_step1;?>"></td>
				<td><input Placeholder="Add Inputs Here" class="addinpt" type="text" name="new_step1" value="<?php echo $new_step1;?>"></td>
			</tr>
			<tr> 
				<td><b>Input 2 : </b></td>
				<td><input Readonly class="addinpt1" type="text" name="test_step2" value="<?php echo $test_step2;?>"></td>
				<td><input Placeholder="Add Inputs Here" class="addinpt" type="text" name="new_step2" value="<?php echo $new_step2;?>"></td>
			</tr>
			<tr> 
				<td><b>Input 3 : </b></td>
				<td><input Readonly class="addinpt1" type="text" name="test_step3" value="<?php echo $test_step3;?>"></td>
				<td><input Placeholder="Add Inputs Here" class="addinpt" type="text" name="new_step3" value="<?php echo $new_step3;?>"></td>
			</tr>
			<tr> 
				<td><b>Input 4 : </b></td>
				<td><input Readonly class="addinpt1" type="text" name="test_step4" value="<?php echo $test_step4;?>"></td>
				<td><input Placeholder="Add Inputs Here" class="addinpt" type="text" name="new_step4" value="<?php echo $new_step4;?>"></td>
			</tr>
<tr> 
<td><b>Approval : </b></td>
<td>
<select class="addinpt" name="step_active" value="<?php echo $step_active;?>">
  <option value="Request">Approved</option>
  <option value="Pending">Pending</option>
  <option value="Rejected">Rejected</option>
</select>
</td>
</tr>
<tr>
<td><b>Reason : </b></td>
<td>
<select class="addinpt" name="step_apreason" value="<?php echo $step_apreason;?>">
  <option value="New category">New category</option>
  <option value="Missing Steps">Missing Steps</option>
  <option value="Incorrect steps">Incorrect steps</option>
  <option value="Fine Tuning">Fine Tuning</option>
  <option value="Suggestion">Suggestion</option>
</select>
</td>
</tr>
<tr> 
<td><b>Notes : </b></td>
<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
			</tr>
		</table>
		<textarea rows="8" cols="60" class="addinptxt" name="step_reason" value="<?php echo $step_reason;?>"></textarea><br>
		<input class="addinp" type="submit" name="update" value="Update">
</form>
</div>
</div>
</div>
</div>
<script  src="js/index.js"></script>
<script type = "text/javascript" language = "javascript">
$("td:contains('Very_Unsatisfied')").css("color", "Red");
$("td:contains('Unsatisfied')").css("color", "Red");
$("td:contains('Neutral')").css("color", "Orange");
$("td:contains('Satisfied')").css("color", "Green");
$("td:contains('Very_Satisfied')").css("color", "#239B56");
</script>
<script type = "text/javascript" language = "javascript">
$(document).ready(function() {
	
$("td:contains('CiscoWebEx')").html(function (_, html) {
     return html.replace(/CiscoWebEx/g,"<img src='https://voltron.cisco.com/amp/img/ciscowebex.png' height='20' width='20' title='Cisco WebEx' />")
});

});
</script>
</div>
</div>
</div>
</div>
<!-- End Page Content -->
</div>
<!-- Footer -->
<footer style="text-align: center; position: fixed; bottom: 0; width:100%; background-color:#252c33; height:35px; color: white; font-family: Arial,Helvetica,sans-serif; ">
<p class="w3-medium">All content are Cisco Confidential and for internal use only,
Cisco-WebEx Feedback Loop <a href="#" target="_blank">.:|:AKBAR:|:.</a></p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
$('select').hover(function(){
    var count = $(this).children().length;
    $(this).attr('size', count);
},function(){
    $(this).removeAttr('size');
});
</script>

<script>
// Search Tab
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("table_with_data");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</body>
</html>
