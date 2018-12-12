<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$username =$_GET['username'];
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
	  <a href="https://voltron.cisco.com/amp/report/overall/index.php" class="w3-bar-item w3-button">Overall Reports</a>
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
echo "" . $_SESSION["us_name"] . ""; ?> 
<?php echo $username; ?>
</a>
    <a style="text-decoration:none;" href="https://voltron.cisco.com/Voltron/" class="w3-padding-large w3-hover-red w3-hide-small w3-right">Logout</a>
  </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:59px">
<a href="https://voltron.cisco.com/amp/report/overall/index.php" class="w3-bar-item w3-button w3-padding-large">Overall Report</a>
  <a href="https://voltron.cisco.com/amp/report/supview/index.php" class="w3-bar-item w3-button w3-padding-large">Supervisor View</a>
  <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Input Management</a>
  <a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Detractor Management</a>
  <a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" class="w3-bar-item w3-button w3-padding-large" >Dashboard</a>  
  <a href="https://voltron.cisco.com/amp/Voltron/" class="w3-bar-item w3-button w3-padding-large" >Dashboard</a>  
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" id="band">
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
	  
<!-- DropDowns on first flex -->
	  
<div class="w3-round w3-margin-bottom">
<h2><a class="f1a">Input </a><a class="f2a">Management</a></h2>
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

<!-- <a class="addinp" href="addv.php"><span>Add Your Inputs</span></a><br/><br/> -->

<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="table-responsive">
<?php
$con = mysqli_connect('localhost','anurudee','ironport','ciscoamp_db');
$per_page = 10;
if (isset($_GET["page"])) {
$page = $_GET["page"];
}
else {
$page = 1;
}
$start_from = ($page-1) * $per_page;
$counter = ($page-1) * $per_page+1;
$query = "SELECT * , TIME_FORMAT(TIMEDIFF(dateposted,strtime),'%H:%i:%s') AS comp FROM form WHERE test_step1 !='' AND new_step1='' AND step_active='pending' ORDER BY c_date DESC LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
?>
<table class="table table-bordered table-hover">
<thead>
<tr>
		<th>SR.NO</th> 
		<th>Created Date</th>
		<th>SR Number</th>
		<th>Voltron ID</th>
		<th>Status</th>
		<th>Reason</th>
		<th>Category</th>
		<th colspan="7" style="Text-align:center;">Dril Down</th>
		<th colspan="4" style="Text-align:center;">Added Inputs</th>
		<th>Edit</th>
</tr>
</thead>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
<td class="wrap" style="text-align:center;width:8px;"><span><?php echo "$counter"; ?></span></td>
<td class="wrap"><span><?php echo $row['c_date']; ?></span></td>
<td class="wrap"><span><a style="text-decoration:none;" href="https://mwz.cisco.com/<?php echo $row['srnum']; ?>" target="_blank"><?php echo $row['srnum']; ?></a></span></td>
<td class="wrap"><span><?php echo "VT"; echo $row['us_name']; echo "". date("md") . ""; echo $row['id']; ?></span></td>
<td class="wrap"><span><?php echo $row['step_active']; ?></span></td>
<td class="wrap"><span><?php echo $row['icause']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text1']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text2']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text3']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text4']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text5']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text6']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text7']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_step1']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_step2']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_step3']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_step4']; ?></span></td>
<?php 
echo "<td class='wrap'><span><a href=\"edit.php?id=$row[id]\">Edit</a></span></td>";
?>
</tr>
</tbody>
<?php
$counter++; //increment counter by 1 on every pass
};
?>
<tfoot>
<tr>
<td colspan="18" class="text-center">SomeLink's Here <a href="#" target="_blank">Link 1</a> and <a href="#" target="_blank">Link 2</a>.</td>
</tr>
</tfoot>
</table>
<div class="pagina" style="font-size:13px;  letter-spacing: 5px;" align="center">
<?php
$totalPages = 1000; 
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$numPagesToShow = 10; 
if($currentPage > $totalPages) {
    $currentPage = $totalPages;
}
if($numPagesToShow >= $totalPages) {
    $numMaxPageLeft = 1;
    $numMaxPageRight = $totalPages;
} else {
    $pagesToShow = ceil($numPagesToShow/2);
    $numMaxPageLeft = $currentPage - $pagesToShow;
    $numMaxPageRight = $currentPage + $pagesToShow;

    if($numMaxPageLeft <= 0) {
        $numMaxPageRight = $numMaxPageRight - $numMaxPageLeft +1;
        $numMaxPageLeft = 1;
    } elseif($numMaxPageRight >= $totalPages) {
        $numMaxPageLeft -= ($numMaxPageRight - $totalPages);
        $numMaxPageRight = $totalPages;
    }
}
for ($i=$numMaxPageLeft; $i<=$numMaxPageRight; $i++) {
  ; echo $i == $currentPage ? $i : "<a class='numbs' href='index.php?page=".$i."'>".$i."</a> ";
}
?>
</div>
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
