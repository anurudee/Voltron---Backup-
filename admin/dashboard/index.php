<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
$username =$_GET['username'];
?>
<!DOCTYPE html>
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
                   <li><a href="https://voltron.cisco.com/AMP/Admin/manageusers/index.php"><i id="fa" class="fa fa-user" aria-hidden="true"></i><span class="text"> Manage Users </span></a></li>
                  <li><a href="https://voltron.cisco.com/AMP/admin/managetree/index.php"><i id="fa" class="fa fa-bars" aria-hidden="true"></i><span class="text"> Manage Voltron Tree </span></a></li>
				  <li><a href="https://voltron.cisco.com/AMP/admin/managebemstree/index.php"><i id="fa" class="fa fa-bars" aria-hidden="true"></i><span class="text"> Manage BEMS Tree </span></a></li> 
				  <li><a href="https://voltron.cisco.com/AMP/Admin/adminlogin.php"><i id="fa" class="fa fa-key" aria-hidden="true"></i><span class="text"> Logout </span></a></li>
				  <li><a href="https://voltron.cisco.com/AMP/mainpage.php"><i id="fa" class="fa-arrow-circle-left" aria-hidden="true"></i><span class="text"> Back to Voltron </span></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-content">
        <div class="topmenu">
           <a href="#" id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></a>
			<a class="headh" href="#" > Welcome <?php
// Echo session variables that were set on previous page
echo "" . $_SESSION["us_name"] . ""; ?> 
<?php echo $username; ?></a>
		  <a class="prdmenu" style="margin: 0% 2% 0% 1%;border-bottom-color: #07c1e4; color: #07c1e4;" href="https://voltron.cisco.com/amp/Admin/Dashboard/index.php" > Overall </a>
		  <a class="prdmenu" style="margin: 0% 2% 0% 1%;" href="https://voltron.cisco.com/AMP/Admin/Dashboard/daily.php" > Daily </a>
        </div>
        <div class="main-section">
         <div class="section-title"> Overall</div>
		 <a href="https://voltron.cisco.com/amp/mainpage.php" class="vback">Back to Voltron </a>
          <div class="card">
            <div class="card-content">         

		<div class="wrapper">
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX First Column START XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

<ul class="flex cards">
<li><h2>Overall Cases</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form where us_name!=''";
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

<li><h2>Current Month Cases</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE c_date > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND us_name!=''";
// SELECT * FROM jokes WHERE date > DATE_SUB(NOW(), INTERVAL 1 MONTH) ORDER BY score DESC;
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
<!-- Monthly Case Number Ends -->	
</li>

<li><h2>Current Week Cases</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE c_date > DATE_SUB(NOW(), INTERVAL 1 WEEK)";
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
</ul>

<h1>Analytical Charts</h1>
<ul class="grid cards">
   <li><h2>Engineer Activity</h2>
 <?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query = "SELECT us_name, count(srnum) AS number FROM form WHERE us_name !='' GROUP BY us_name ORDER BY number DESC";  
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
      var chart = new google.visualization.BarChart(document.getElementById("columnchart_values2"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values2"></div>
</li>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query = "SELECT cusen, count(srnum) AS number FROM form WHERE cusen !='' GROUP BY cusen";  
 $result = mysqli_query($connect, $query);  
 ?>  
  <li><h2>Sentiments</h2>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["cusen"]."', ".$row["number"]."],";  
	}  
?>  
      ]);

        var options = {
		  legend: {position: 'top', textStyle: {color: 'blue', fontSize: 12}},
		  pieSliceText: 'value-and-percentage',
		  width: 420,
          height: 400,
          pieHole: 0.35,
		  slices: {
            0: { color: 'orange' },
            1: { color: 'lightgreen' },
            2: { color: 'green' }
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <div id="donutchart"></div>
	</li>
  <li><h2>Issues</h2>
<?php  
 $connect = mysqli_connect("localhost", "anurudee", "ironport", "ciscoamp_db");  
 $query = "SELECT test_text1, count(srnum) AS number FROM form WHERE test_text1 !='' AND test_text1 !='Select Your Issue' GROUP BY test_text1 ORDER BY number DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
<script type="text/javascript">
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawBasic);
function drawBasic() {

      var data = google.visualization.arrayToDataTable([
        ['Issues', 'Total Cases',{ role: 'annotation' },],
<?php  
	while($row = mysqli_fetch_array($result))  
    {  
		echo "['".$row["test_text1"]."', ".$row["number"].", '".$row["test_text1"]."'],";  
	}  
?>  
      ]);

      var options = {
		legend: 'none',
		width: 420,
        height: 400,
		bar: {groupWidth: "90%"},
        chartArea: {width: '95%'},
        
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div id="chart_div"></div>
  </li>
</ul>

<h1>Agent Overall Flow Suggestion</h1>
<ul class="flex cards">
<li><h2>New Flow Suggested</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE test_step1 !=''";
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
  </li>
  <li><h2>Requested</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE step_active = 'Request'";
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
	</li>
<li><h2>Pending</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE step_active = ''";
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
</li>
 <li><h2>Approved</h2>
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
$sql = "SELECT Count(srnum) AS num FROM form WHERE step_active = 'Approved'";
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
</li>
</li> 
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
