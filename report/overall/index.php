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
<html xmlns="https://www.w3.org/1999/xhtml"><head><script src="chrome-extension://ohkeehjepccedbdpohnbapepongppfcj/whatfix.com/editorLoaded.js" type="text/javascript"></script><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}</style><link rel="icon" href="https://voltron.cisco.com/amp/img/logo.png" width="" type="image/ico">
<title>Voltron</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://voltron.cisco.com/amp//style/style.css">
<link rel="stylesheet" href="https://voltron.cisco.com/amp/style/style1.css">
<link rel="stylesheet" href="style/esc.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://voltron.cisco.com/amp/js.js"></script>
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
<style>
body{
    background: #f8f8f8;
}

label.ovral {
    font-size: 75px;
    color: cornflowerblue;
}

a.numbs {
    text-align: center;
    font-size: 15px;
    border: 1px solid gray;
    padding: 5px;
    letter-spacing: 0;
    border-radius: 5px;
    text-decoration: none;
    color: darkgreen;
    font-weight: bold;
    background: lightyellow;
}

table#report_charts_tbl_r1 {
    width: 100%;
    text-align: center;
    border: 1px solid gray;
	border-collapse: collapse;	
}


table#report_charts_tbl_r1 td{
    text-align: center;
    border: 1px solid gray;
	width:25%;
	
}

table#report_charts_tbl_r2 {
    width: 100%;
    text-align: center;
    border: 1px solid gray;
	border-collapse: collapse;	
}


table#report_charts_tbl_r2 td{
    text-align: center;
    border: 1px solid gray;
	width:25%;
	
}

table#report_table {
	width: 100%;
    text-align: center;
    border: 1px solid gray;
	border-collapse: collapse;
}

table#report_table td{
    text-align: center;
    border: 1px solid gray;
}

div#body_content {
	margin: 87px 20px 10px 20px;
}

tr#top_heading_divider {
    background: #0070d2!important;
    color: white;
    font-size: 18px;
    font-weight: bold;
}

p#titles {
    padding: 10px;
}

td.wrap {
    max-width: 100px;
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

a.f1a {
    text-decoration: none;
    color: #049FD9;
    font-size: 20px;
}

a.f2a {
    text-decoration: none;
    color: #6CC04A;
    font-size: 18px;
}
h2, .h2 {
    font-size: 30px;
}

h1, .h1, h2, .h2, h3, .h3 {
    margin-top: 10px;
    margin-bottom: 5px;
}
h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: inherit;
    font-weight: 500;
    line-height: 1.1;
    color: inherit;
}

h2 {
    margin: 1%;
}

</style>
</head><body style="">
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://voltron.cisco.com/amp/mainpage.php" style="height: 100px;" class="w3-bar-item w3-button w3-padding-large"><img style="width: 107px; margin: -22px -10px -33px -12px; padding: 9px 3px 2px 3px;" class="vlogo" src="https://voltron.cisco.com/amp/img/logo.png"></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Menu  <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="https://voltron.cisco.com/amp/report/overall/index.php" class="w3-bar-item w3-button">Overall Reports</a>
        <a href="https://voltron.cisco.com/amp/report/supview/index.php" class="w3-bar-item w3-button">Supervisor View</a>
        <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" class="w3-bar-item w3-button">Input Management</a>
		<a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" class="w3-bar-item w3-button">Detractor Management</a>
		<a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" class="w3-bar-item w3-button">Dashboard</a>
      </div>
    </div> 
<a href="#" class="w3-bar-item w3-button w3-padding-large"><div id="box">10:17:35</div></a>
<a style="text-decoration:none;" href="#" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> 
<br> 
</a>
<a style="text-decoration:none;" href="https://voltron.cisco.com/amp/" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> Logout </a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:59px">
  <a href="https://voltron.cisco.com/amp/report/overall/index.php" class="w3-bar-item w3-button w3-padding-large">Overall Report</a>
  <a href="https://voltron.cisco.com/amp/report/supview/index.php" class="w3-bar-item w3-button w3-padding-large">Supervisor View</a>
  <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Input Management</a>
  <a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" class="w3-bar-item w3-button w3-padding-large" >Detractor Management</a>
  <a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" class="w3-bar-item w3-button w3-padding-large" >Dashboard</a>
  <a href="https://voltron.cisco.com/amp/" class="w3-bar-item w3-button w3-padding-large">Logout</a>
</div>


<div id="body_content">
<table id="report_charts_tbl_r1">
<tr id="top_heading_divider">
<td>
<p id="titles">AMP Overall Vol 2018 Monthly <img hidden src="https://voltron.cisco.com/amp/img/excel.png" style="background:blue;float:right;width:20px;height:20px;" > <a href="#" ></a></img></p>
</td>
<td>
<p id="titles">AMP - Overall Vol 2018 Weekly</p>
</td>
<td>
<p id="titles">Last 7 Voltron used days </p>
</td>
<td>
<p id="titles"> 30 Min Interval (Last 5 Hours - Today) </p>
</td>
</tr>
<tr id="top_chart_divider">
<td>
<!-- Monthly -->
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT COUNT(srnum) AS num, c_month, c_date, MONTHNAME (c_date) AS MONTHLYNAME FROM form GROUP BY c_month ORDER BY c_date ASC LIMIT 12";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Weekly', 'Cases',{ role: 'annotation' }],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["MONTHLYNAME"]."', ".$row["num"].", ".$row["num"]."],";  
	}  
?> 
      ]);

      var view = new google.visualization.DataView(data);

      var options = {
        width: 467,
        height: 300,
        bar: {groupWidth: "45%"},
		backgroundColor: '#f8f8f8',
        legend: { position: "none" },
		vAxis: {
			textStyle: {
                                color: "white"
                            },
    gridlines: {
        color: 'transparent'
    }
}
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values2"></div>
</td>

<td>
<!-- Weekly -->
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT c_date,dateposted, date_format(dateposted - interval day(dateposted)%7 day, '%d-%m-%Y') as period_start, date_format(dateposted + interval 7-day(dateposted)%7 day, '%d-%m') as period_end, COUNT(*) FROM form GROUP BY period_start ORDER BY c_date DESC LIMIT 10";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["period_start"]."', ".$row["COUNT(*)"].", ".$row["COUNT(*)"]."],";  
	}  
?> 
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);
      var options = {
        width: 467,
        height: 300,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
		backgroundColor: '#f8f8f8',
        hAxis: {
            gridlines: {
                count: 0,
                color: 'transparent'
            },
            scaleType: 'log',
            minValue: 0,
            baselineColor: 'transparent'
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values"></div>
</td>

<td>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT COUNT(srnum) AS num,c_date,date_format(c_date , '%d-%b') as period_start, COUNT(*) FROM form WHERE c_date!='' GROUP BY period_start ORDER BY c_date DESC LIMIT 7";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Weekly', 'Cases',{ role: 'annotation' }],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["period_start"]."', ".$row["num"].", ".$row["num"]."],";  
	}  
?> 
      ]);

      var view = new google.visualization.DataView(data);

      var options = {
        width: 467,
        height: 300,
        bar: {groupWidth: "45%"},
		backgroundColor: '#f8f8f8',
        legend: { position: "none" },
		vAxis: {
			textStyle: {
                                color: "white"
                            },
    gridlines: {
        color: 'transparent'
    }
}
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values3"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values3"></div>
</td>
<td>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT c_date,dateposted, date_format(dateposted - interval minute(dateposted)%30 minute, '%H:%i') as period_start, date_format(dateposted + interval 30-minute(dateposted)%30 minute, '%H:%i') as period_end, COUNT(*) FROM form WHERE c_date=CURDATE() GROUP BY period_start ORDER BY period_end ASC LIMIT 10";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Date', 'Cases',{ role: 'annotation' }],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["period_start"]."', ".$row["COUNT(*)"].", ".$row["COUNT(*)"]."],";  
	}  
?> 
      ]);

      var view = new google.visualization.DataView(data);

      var options = {
        width: 467,
        height: 300,
        bar: {groupWidth: "55%"},
		backgroundColor: '#f8f8f8',
        legend: { position: "none" },
		vAxis: {
			textStyle: {
                                color: "white"
                            },
    gridlines: {
        color: 'transparent'
    }
}
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values1"></div>
</td>
</tr>
</table>

<hr>

<table id="report_charts_tbl_r2">
<tr id="top_heading_divider">
<td>
<p id="titles">Top Issues</p> 
</td>
<td>
<p id="titles">Sentiment</p>
</td>
<td>
<p id="titles">Engineer Activity -

<?php
$servername = "localhost";
$username = "anurudee";
$password = "ironport";
$dbname = "ciscoamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT COUNT(*) FROM ( SELECT COUNT(us_name) AS tac FROM form WHERE us_name!='' GROUP BY us_name ) AS zeross";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a> Active Engineers : (". $row["COUNT(*)"]. ")</a>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 	
</td>

</p>
<td>
<p id="titles">Case Count</p>
</td>
</tr>
<tr id="top_chart_divider">
<td>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT COUNT(srnum) AS num , test_text1 FROM form GROUP BY test_text1 ORDER BY num DESC";
 $result = mysqli_query($connect, $query);  
?>

<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "Density", { role: "style" } ],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["test_text1"]."', ".$row["num"].", ".$row["num"]."],"; 
	}  
?> 
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);
      var options = {
        width: 467,
        height: 350,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
		backgroundColor: '#f8f8f8',
        hAxis: {
            gridlines: {
                count: 0,
                color: 'transparent'
            },
            scaleType: 'log',
            minValue: 0,
            baselineColor: 'transparent'
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById("donutchart"));
      chart.draw(view, options);
  }
  </script>
    <div id="donutchart"></div>
</td>
<td>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT COUNT(srnum) AS num, cusen FROM form WHERE cusen!='' GROUP BY cusen ORDER BY num DESC";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Sentiment', 'Total Case'],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["cusen"]."', ".$row["num"]."],";  
	}  
?> 
        ]);

        var options = {
          	width: 467,
        height: 300,
		backgroundColor: '#f8f8f8',
          pieHole: 0.4,
		  		  slices: {
            0: { color: 'green' },
            1: { color: 'green' },
            2: { color: 'orange' },
            3: { color: 'red' }
          },
		  pieSliceText: 'value',
		  
		  legend: { 
		  position: 'bottom',
				  }
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" ></div>
</td>
<td>
<!-- Eng_Activity -->
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query ="SELECT COUNT(srnum) AS num , us_name FROM form WHERE us_name!='' GROUP BY us_name ORDER BY num DESC";
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Cluster Primary", "Total Case", { role: "style" } ],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["us_name"]."', ".$row["num"].", ".$row["num"]."],";  
	}  
?> 
      ]);
      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);
      var options = {
        width: 467,
        height: 350,
        bar: {groupWidth: "55%"},
        legend: { position: "none" },
		backgroundColor: '#f8f8f8',
        hAxis: {
            gridlines: {
                count: 0,
                color: 'transparent'
            },
            scaleType: 'log',
            minValue: 0,
            baselineColor: 'transparent'
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values1"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values1"></div>
</td>
<td>
<!-- Todays count -->
<h3>Total Case Count</h3>
    <p class="ovral">
		<?php
$servername = "localhost";
$username = "anurudee";
$password = "ironport";
$dbname = "ciscoamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Count(srnum) AS num FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><label class='ovral'>". $row["num"]. "</label><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 	
</p>
<hr style="border:.5px solid gray">
<h3>Today's Case Count</h3>
    <p class="ovral">
		<?php
$servername = "localhost";
$username = "anurudee";
$password = "ironport";
$dbname = "ciscoamp_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT Count(srnum) AS num FROM form WHERE c_date=CURDATE()";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><label class='ovral'>". $row["num"]. "</label><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 	
</p>


</td>
</tr>
</table>

<hr>

<h2><a class="f1a"> Cisco AMP </a><a class="f2a">Overall Reports</a> <a class="f1a">(Last 50 entries)</a></h2>
<img id="excel" onclick="generateExcel()" src="https://voltron.cisco.com/AMP/img/excel.png" style="background: #0070d2;float:right;width: 40px;height: 40px;margin: -51px 26px 0px 0px;padding: 3px;border: 1px solid gray;border-radius: 5px;">
<table style="font-size:13px;" id="report_table">
<?php
$con = mysqli_connect('localhost','anurudee','','ciscoamp_db');
$per_page = 50;
if (isset($_GET["page"])) {
$page = $_GET["page"];
}
else {
$page = 1;
}
$start_from = ($page-1) * $per_page;
$query = "SELECT * FROM form ORDER BY id DESC LIMIT $start_from, $per_page";
$result = mysqli_query ($con, $query);
?>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>SR.No</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Created Date</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Case ID</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Customer Email/ID</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Sentiments</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Case Owner</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Drill Down 1</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Drill Down 2</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Drill Down 3</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Drill Down 4</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Tech</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Sub-Tech</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>Priority</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>ProblemCode</span></td>
<td style="font-weight:bold;background:#0070d2!important;color:white;" class="wrap"><span>ResolutionCode</span></td>
</tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td style="padding:3px" class="wrap"><span><?php echo $row['id']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['dateposted']; ?></span></td>
<td class="wrap"><span><a class="c3mcon" style="text-decoration:none;color:blue;" href="http://mwz.cisco.com/<?php echo $row['srnum']; ?>" target="_blank"><?php echo $row['srnum']; ?></a></span></td>
<td class="wrap"><span><?php echo $row['CEmail']; ?></span></td>
<td style="font-weight:bold;padding:5px;text-align:center;" class="wrap"><span><?php echo $row['cusen']; ?></span></td>
<td style="padding:3px;text-align:center;" class="wrap"><span><a class="c3mcon" style="text-decoration:none;color:blue;" href="http://directory.cisco.com/dir/reports/<?php echo $row['us_name']; ?>" target="_blank"><?php echo $row['us_name']; ?></a></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text1']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text2']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text3']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text4']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['tech']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['subtech']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['Priority']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['ProblemCode']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['ResolutionCode']; ?></span></td>
<!-- <td class="wrap"><span><a style="text-decoration:none;" href="#"> <?php echo 'edit'; ?></span></a></td> -->
</tr>
<?php
};
?>
</table>
<div class="pagina" style="font-size:13px;letter-spacing: 5px;margin-top: 12px;margin-bottom: 55px;color: red;font-weight: bold;" align="center">
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
<script type = "text/javascript" language = "javascript">
$("td:contains('Host')").css("color", "Green");
$("td:contains('Attendee')").css("color", "Green");
$("td:contains('Site Admin')").css("color", "Orange");
$("td:contains('Partner')").css("color", "Red");
$("td:contains('Employee')").css("color", "Blue");
$("td:contains('Billing Contact')").css("color", "#cc33cc");
$("td:contains('Very_Unsatisfied')").css("color", "Red");
$("td:contains('Unsatisfied')").css("color", "Red");
$("td:contains('Neutral')").css("color", "Orange");
$("td:contains('Satisfied')").css("color", "Green");
$("td:contains('Very_satisfied')").css("color", "Green");
</script>
</div>

<footer style="text-align: center; position: fixed; bottom: 0; width:100%; background-color:#252c33; height:35px; color: white; font-family: Arial,Helvetica,sans-serif; font-size:5px; ">
<p class="w3-medium">All content are Cisco Confidential and for internal use only,
Cisco-WebEx Feedback Loop <a href="#" target="_blank">.:|:AKBAR:|:.</a></p>
</footer>


<table id="table_with_data10" hidden>
<?php
$con = mysqli_connect('localhost','anurudee','','ciscoamp_db');
$query = "SELECT * FROM form ORDER BY id ASC";
$result = mysqli_query ($con, $query);
?>
<tr>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>SR.No</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Created Date</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Case ID</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Customer Email/CEC ID</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Sentiments</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Case Owner</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Drill Down 1</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Drill Down 2</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Drill Down 3</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Drill Down 4</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>New Drill Down Reason</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Requested Drill Down 1</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Requested Drill Down 2</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Requested Drill Down 3</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Requested Drill Down 4</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Tech</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Sub-Tech</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>Priority</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>ProblemCode</span></td>
<td style="font-weight:bold;background:#0070d2!important;" class="wrap"><span>ResolutionCode</span></td>
</tr>
<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
<tr>
<td style="padding:3px" class="wrap"><span><?php echo $row['id']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['dateposted']; ?></span></td>
<td class="wrap"><span><a class="c3mcon" style="text-decoration:none;color:blue;" href="http://mwz.cisco.com/<?php echo $row['srnum']; ?>" target="_blank"><?php echo $row['srnum']; ?></a></span></td>
<td class="wrap"><span><?php echo $row['CEmail']; ?></span></td>
<td style="font-weight:bold;padding:5px;text-align:center;" class="wrap"><span><?php echo $row['cusen']; ?></span></td>
<td style="padding:3px;text-align:center;" class="wrap"><span><?php echo $row['us_name']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text1']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text2']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text3']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_text4']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['icause']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_step1']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_step2']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_step3']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['test_step4']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['tech']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['subtech']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['Priority']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['ProblemCode']; ?></span></td>
<td style="padding:3px" class="wrap"><span><?php echo $row['ResolutionCode']; ?></span></td>
<!-- <td class="wrap"><span><a style="text-decoration:none;" href="#"> <?php echo 'edit'; ?></span></a></td> -->
</tr>
<?php
};
?>
</table>

<script>
function generateExcel() {
    //getting data from our table
    var data_type = 'data:application/vnd.ms-excel';
    var table_div = document.getElementById('table_with_data10');
    var table_html = table_div.outerHTML.replace(/ /g, '%20');
    var a = document.createElement('a');
    a.href = data_type + ', ' + table_html;
    a.download = 'AMP_live_cases.xls';
    a.click();
}
</script>

</body></html>