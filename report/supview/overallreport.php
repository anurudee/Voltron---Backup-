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
<link rel='stylesheet prefetch' href='https://voltron.cisco.com/amp/report/supview/style/boot.css'>
<link rel="stylesheet" type="text/css" href="https://voltron.cisco.com/amp/report/supview/style/style1.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script src="https://voltron.cisco.com/amp/report/supview/js/js.js"></script>
<script src="https://voltron.cisco.com/amp/report/supview/js/script.js"></script>
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

<!-- Page content -->
<div class="w3-content" style="max-width:2000px">

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" id="band">
    <div class="w3-row w3-padding-32" style="padding-bottom: 0px!important;">
      <div class="w3-third" style="margin-bottom:  1%;">
<!-- DropDowns on first flex -->  
<div class="w3-round w3-margin-bottom">
<div id="LCS_amp" class="container">
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
$query = "SELECT * , TIME_FORMAT(TIMEDIFF(dateposted,strtime),'%H:%i:%s') AS comp FROM form WHERE us_name !='' AND test_text !='test' AND test_text !='Select Your Issue' ORDER BY id DESC LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
?>
<table id="table_with_data" class="table table-bordered table-hover">
<thead>
<tr align="center">
<th>SR.NO</th> 
<th>SR Number</th>
<th>Created Date</th>
<th>Voltron ID</th>
<th>Case Owner</th>
<th>Sentiments</th>
<th>Category</th>
<th colspan="7" style="Text-align:center;">Dril Down</th>
<th>Notes</th>
<th>Avg.VTR</th>
</tr>
</thead>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tbody>
<tr>
<td class="wrap" style="text-align:center;width:8px;"><span><?php echo $row['id'];  ?></span></td>
<td class="wrap"><span><a class="c3mcon" style="text-decoration:none;" href="http://mwz.cisco.com/<?php echo $row['srnum']; ?>" target="_blank"><?php echo $row['srnum']; ?></a></span></td>
<td class="wrap"><span><?php echo $row['dateposted']; ?></span></td>
<td class="wrap"><span><?php echo "VT"; echo $row['us_name']; echo "". date("md") . ""; echo $row['id']; ?></span></td>
<td class="wrap"><span><?php echo $row['us_name']; ?></span></td>
<td class="wrap"><span><?php echo $row['cusen']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text1']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text2']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text3']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text4']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text5']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text6']; ?></span></td>
<td class="wrap"><span><?php echo $row['test_text7']; ?></span></td>
<td class="wrap"><span><?php echo $row['notes']; ?></span></td>
<td class="wrap"><span><?php echo $row['comp']; ?></span></td>
</tr>
</tbody>
<?php
};
?>
<tfoot>
<tr>
<td colspan="16" class="text-center">SomeLink's Here <a href="#" target="_blank">Link 1</a> and <a href="#" target="_blank">Link 2</a>.</td>
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
  ; echo $i == $currentPage ? $i : "<a class='numbs' href='overallreport.php?page=".$i."'>".$i."</a> ";
}
?>
</div>
</div>

<script type = "text/javascript" language = "javascript">
$("td:contains('Very_Unsatisfied')").css("color", "Red");
$("td:contains('Unsatisfied')").css("color", "Red");
$("td:contains('Neutral')").css("color", "Orange");
$("td:contains('Satisfied')").css("color", "Green");
$("td:contains('Very_Satisfied')").css("color", "#239B56");
</script>

</div>
</div>
</div>
<!-- End Page Content -->
</div>
<!-- Footer -->

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
