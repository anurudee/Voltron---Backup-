<?php
session_start();
?><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Voltron Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet prefetch' href='css/df09a29979e64d23cdc734563.css'>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900" rel="stylesheet">
     <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <div class="side-menu">
        <div class="logo">
          Voltron Admin Page
        </div>
        <div class="menu">
          <ul>
            <li><a href="https://voltron.cisco.com/amp/admin/dashboard/index.php"><i id="fa" class="fa fa-bar-chart" aria-hidden="true"></i><span class="text"> Dashboard </span></a>
               <ul class="dropdown">
                   <li><a href="https://voltron.cisco.com/amp/Admin/manageusers/index.php"><i id="fa" class="fa fa-user" aria-hidden="true"></i><span class="text"> Manage Users </span></a></li>
                  <li><a href="https://voltron.cisco.com/AMP/admin/managetree/index.php"><i id="fa" class="fa fa-bars" aria-hidden="true"></i><span class="text"> Manage Voltron Tree </span></a></li>
				  <li><a href="https://voltron.cisco.com/AMP/admin/managebemstree/index.php"><i id="fa" class="fa fa-bars" aria-hidden="true"></i><span class="text"> Manage BEMS Tree </span></a></li> 
				  <li><a href="https://voltron.cisco.com/amp/"><i id="fa" class="fa fa-key" aria-hidden="true"></i><span class="text"> Logout </span></a></li>
				  <li><a href="https://voltron.cisco.com/amp/mainpage.php"><i id="fa" class="fa-arrow-circle-left" aria-hidden="true"></i><span class="text"> Back to Voltron </span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-content">
        <div class="topmenu">
           <a href="#" id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			<a class="headh" href="#" > Welcome <?php echo "<label>" . $_SESSION["us_name"] . "</label><br>"; ?></a>
		  <a class="prdmenu"  href="https://voltron.cisco.com/amp/Admin/Dashboard/index.php" > Overall </a>
		  <a class="prdmenu" style="border-bottom-color: #07c1e4; color: #07c1e4;" href="https://voltron.cisco.com/amp/Admin/Dashboard/daily.php" > Daily </a>
        </div>
        <div class="main-section">
          <div class="section-title"> Daily </div>
          <div class="card">
            <div class="card-content">         

		<div class="wrapper">

<ul class="flex cards">
  <li><h2>Today's Cases</h2>
  <!-- Daily Case Number Start -->
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
<!-- Daily Case Number Ends -->
</li>

<li><h2>New Flow Suggested</h2>
<!-- Overall Case Number Start -->
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE test_step1 !='' AND c_date=CURDATE()";
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
<!-- Overall Case Number End -->
</li>

<li><h2>Accepted Flows</h2>
<!-- Weekly Case Number Starts -->
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE c_date=CURDATE() ";
// SELECT * FROM jokes WHERE date > DATE_SUB(NOW(), INTERVAL 1 WEEK) ORDER BY score DESC;
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
<!-- Weekly Case Number Ends -->
</li>

<li><h2>Detractors</h2>
<!-- Monthly Case Number Starts -->
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
$sql = "SELECT c_date ,cusen, Count(srnum) AS num FROM form WHERE cusen = 'Unsatisfied' AND cusen ='Very Unsatisfied' AND  c_date=CURDATE()";
// SELECT * FROM jokes WHERE date > DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY score DESC;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br><a class='ovral' href='https://voltron.cisco.com/amp/Admin/Dashboard/Detractor/index.php'><label class='ovral'>". $row["num"]. "</label></a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 	
</p>
<!-- Monthly Case Number Ends -->	
</li>
</ul>


<h1>Comparison Charts</h1>

<ul class="grid cards">
<li><h2>Day to Day Comparison</h2>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query = "SELECT c_date, count(srnum) AS number FROM form WHERE c_date > DATE_SUB(NOW(), INTERVAL 1 WEEK) GROUP BY c_date ORDER BY c_date";  
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Date', 'Week',{ role: 'annotation' }],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["c_date"]."', ".$row["number"].", ".$row["number"]."],";  
	}  
?> 
      ]);

      var view = new google.visualization.DataView(data);

      var options = {
        width: 420,
        height: 400,
        bar: {groupWidth: "65%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values1"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values1"></div>
</li>

  <li><h2>Engineer Activity</h2>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query = "SELECT us_name, count(srnum) AS number FROM form WHERE us_name !='' GROUP BY us_name ORDER BY number";  
 $result = mysqli_query($connect, $query);  
?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
          ['Date', 'Week',{ role: 'annotation' }],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["us_name"]."', ".$row["number"].", ".$row["number"]."],";  
	}  
?> 
      ]);

      var view = new google.visualization.DataView(data);

      var options = {
        width: 500,
        height: 400,
        bar: {groupWidth: "65%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values2"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values2"></div>
</li>
  <li><h2 style="color:grey;">Will be Updated soon</h2>
    <p>
    </p></li> 
</ul>

</div>	
			
    </div>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script  src="js/index.js"></script>

</body>
</html>
