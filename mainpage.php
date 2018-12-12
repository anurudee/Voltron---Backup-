<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<link rel="icon" href="https://voltron.cisco.com/amp/img/logo.png" width type="image/ico">
<title>Voltron</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/style1.css">
<link rel="stylesheet" href="style/esc.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js.js"></script>
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
body {
	font-family: Arial,Helvetica,sans-serif; background-color:#f8f8f8;
	}
.mySlides {
	display: none
	}

.hide {
  display: none;
}

div#watermark_product {
    position: fixed;
	margin: -13% 0% 0% -12%;
    
}

@media screen and (min-width: 500px) {
div#watermark_product {
    position: fixed;
	margin: -2% 0% 0% 0%;
}
}

</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="https://voltron.cisco.com/amp/mainpage.php" class="w3-bar-item w3-button w3-padding-large"><img class="vlogo" src="https://voltron.cisco.com/amp/img/logo.png" /></a>
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
<a href="#" class="w3-bar-item w3-button w3-padding-large"><div id="box"></div></a>
<a style="text-decoration:none;" href="#" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> 
<?php
// Echo session variables that were set on previous page
echo "" . $_SESSION["us_name"] . "<br>"; ?> 
</a>
<a style="text-decoration:none;" href="https://voltron.cisco.com/amp/" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> Logout </a>
<a href="#" class="green_amp"><img onclick="window.open('https://amptgstatus.statuspage.io/#', 'Popup Window', 'width=600, height=600, top=70, left=100, resizable=1, menubar=yes', true);" title="Check AMP Status" class="green_amp" src="https://voltron.cisco.com/amp/img/circle.png" alt="Tools Link" width="8" height="8"></a>
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
<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" id="band">
    <div class="w3-row w3-padding-32">
      <div class="w3-third">  
<!-- DropDowns on first flex -->  
<div class="w3-round w3-margin-bottom">	
<?php $pst = new DateTimeZone('America/Los_Angeles');
$three_hours_ago = new DateTime('', $pst); 
?>
<form method="POST">
<input hidden name="strtime" type="text" value=" <?php echo $three_hours_ago->format('Y-m-d H:i:s'); ?>" >
<script>
function myFunction1000() {
    var x = document.getElementById("select-boxes");
    var xy = document.getElementById("restart");
    var xyz = document.getElementById("stepsa");
    if (x.style.display === "none") {
        x.style.display = "block";
        xy.style.display = "block";
        xyz.style.display = "none";
    } else {
        x.style.display = "none";
        xy.style.display = "none";
        xyz.style.display = "block";
    }
}

function myFunction1001() {
		location.reload();
}

function show2(){
  document.getElementById('div1').style.display = 'block';
}
</script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<div class="hrset">
      <span class="hrset">
        Digitize Your Case <!--Padding is optional-->
      </span>
    </div>
<div class="select-boxes" id="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php'); 
    //Get all BaseTree data
    $query = $db->query("SELECT * FROM sub WHERE status = 1 ORDER BY sub_name ASC");  
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<input readonly type="text" style="color:#0070d2!important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="test_text" value="AMP for End Points" /></input>
	<input type="Text" required name="srnum" id="srnum" Placeholder="SR Number.." pattern="[0-9]{9}" autocomplete="off"></input>
    <br>
	<br>
    <select class="minimal" name="sub" id="sub" onchange="document.getElementById('text_content1').value=this.options[this.selectedIndex].text" style="display:block;">
        <option value="">Select Subtree </option>
<?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['sub_id'].'">'.$row['sub_name'].'</option>';
            }
        }else{
            echo '<option value="">Select one of the Following</option>';
        }
?>
    </select>
	<input type="hidden" name="test_text1" id="text_content1" value="" />
    <br>
    <select class="minimal" name="sub1" id="sub1" onchange="document.getElementById('text_content2').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree1</option>
    </select>
	<input type="hidden" name="test_text2" id="text_content2" value="" />
	<br>
    <br>
    <select class="minimal" name="sub2" id="sub2" onchange="document.getElementById('text_content3').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree2</option>
    </select>
	<input type="hidden" name="test_text3" id="text_content3" value="" />
	<br>
    <br>
    <select class="minimal" name="sub3" id="sub3" onchange="document.getElementById('text_content4').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree3</option>
    </select>
	<input type="hidden" name="test_text4" id="text_content4" value="" />
	<br>
    <br>
    <select class="minimal" name="sub4" id="sub4" onchange="document.getElementById('text_content5').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree4</option>
    </select>
	<input type="hidden" name="test_text5" id="text_content5" value="" />
	<br>
    <br>
    <select class="minimal" name="sub5" id="sub5" onchange="document.getElementById('text_content6').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree5</option>
    </select>
	<input type="hidden" name="test_text6" id="text_content6" value="" />
	<br>
    <br>
    <select class="minimal" name="sub6" id="sub6" onchange="document.getElementById('text_content7').value=this.options[this.selectedIndex].text">
        <option value="">Select Subtree6</option>
    </select>
	<input type="hidden" name="test_text7" id="text_content7" value="" />
	</div>	
		</div>
<hr>
<textarea style="border-radius:5px;" name="notes" rows="6" cols="50" id="notes" Placeholder="Add your notes here....." ></textarea><br>
<hr>
<div class="amp_btn">
<a id="stepsa" style="margin-right:2%; float:right;" onclick="myFunction100()" title="Add Flows" value="+"> <img src="https://voltron.cisco.com/amp/img/survey.png" alt="Add Flows" width="24" height="24"> </a>
<a id="stepsa" style="margin-right:5%; float:right;" onclick="myFunction101()" title="Tools & Links" value="+"> <img src="https://voltron.cisco.com/amp/img/linkb.png" alt="Tools Link" width="24" height="22" </a>
</div>
<hr>
<div id="toolcapt">
<a href="#ATT" tab  onclick="myFunctionToolC()" class="toolscap" >ATT</a>
<a href="#AMPVLOG" tab onclick="myFunctionToolD()" class="toolscap" >VLOG</a>
<a href="#Cloudboard" tab onclick="myFunctionToolE()" class="toolscap" >Cloudboard</a>
<a href="#Training" tab onclick="myFunctionToolF()" class="toolscap" >Training</a>		
<input type="text" hidden name="tool_content1" id="myBtn">
<input type="text" hidden name="tool_content2" id="myBtn1">
<input type="text" hidden name="tool_content3" id="myBtn2">
<input type="text" hidden name="tool_content4" id="myBtn3">
<input type="text" hidden name="tool_content5" id="myBtn4">
<input type="text" hidden name="tool_content6" id="myBtn5">
<input type="text" hidden name="tool_content7" id="myBtn6">
<input type="text" hidden name="tool_content8" id="myBtn7">
<input type="text" hidden name="tool_content9" id="myBtn8">
<input type="text" hidden name="tool_content10" id="myBtn9">
<input type="text" hidden name="tool_content11" id="myBtn10">
<script>
function myFunctionToolC() {
	window.open("https://amptools.cisco.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=400");
	document.getElementById("myBtn").value = "ATT";
}

function myFunctionToolD() {
	window.open("https://amptac.cisco.com/dashboard/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=400");
	document.getElementById("myBtn1").value = "AMPVLOG";
}

function myFunctionToolE() {
	window.open("https://cloudboard.cisco.com/web/lookahead/ATS-ConnectorWindows", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=400");
	document.getElementById("myBtn2").value = "Cloudboard";
}

function myFunctionToolF() {
	window.open("https://tstraining.cisco.com/CustAdv/ts/ielc/tst/el/online/courses/amp_portal/index.shtml", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=400");
	document.getElementById("myBtn3").value = "Training";	
}
</script>
<script>
function myFunction101() {
    var y = document.getElementById("toolcapt");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>
<script>
function myFunction102() {
    var y = document.getElementById("amp_notepad");
    if (y.style.display === "none") {
        y.style.display = "block";
    } else {
        y.style.display = "none";
    }
}
</script>
</div>
<div class="addstep" id="addstep" style="display :none;">
<hr/>
<p class="sentime1">Provide Feedback:</p>
<div class="icausx">
  <input class="icause" type="radio" name="icause" value="Report Error"> Report Error
  <input class="icause" type="radio" name="icause" value="Suggest a Flow"> Suggest a Flow
  <input class="icause" type="radio" name="icause" value="Request Change"> Request Change
</div>
<textarea style="border-radius:5px;margin:  0px;width: 96%;" name="test_step1" rows="3" cols="50" id="notes" Placeholder="Add Step 1..." ></textarea><br>
  <input class="adstp" name="test_step2"  type="text" placeholder="Add Step 2..."></input>
  <br>
  <input class="adstp" name="test_step3" type="text" placeholder="Add Step 3..."></input>
  <br>
  <input class="adstp" name="test_step4" type="text" placeholder="Add Step 4..."></input>
<br>
<script>
function myFunction100() {
    var x = document.getElementById("addstep");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
</script>
</div>	
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="https://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
<script src="esc.js"></script>
<script type="text/javascript">
    $(function () {
        $('#lstFruits').multiselect({
            includeSelectAllOption: true
        });
    });
</script>
<hr>
<label id="cusenlbl">Perceived Customer Sentiment:</label>		
<div id="cusen1" title="Rate Customer Pulse" class="stars">
		<input type="radio" onclick="show2();" name="cusen"  value="Very_Unsatisfied" class="star-1" id="star-1" />
		<label title="Rate Customer Pulse
Very Unsatisfied" id="cusen1" class="star-1"  for="star-1"></label>
		<input type="radio" onclick="show2();" name="cusen" value="Unsatisfied" class="star-2" id="star-2" />
		<label title="Rate Customer Pulse
Unsatisfied" class="star-2" for="star-2"></label>
		<input type="radio" onclick="show2();" name="cusen" value="Neutral" class="star-3" id="star-3" />
		<label title="Rate Customer Pulse
Neutral" class="star-3" for="star-3"></label>
		<input type="radio" onclick="show2();" name="cusen" value="Satisfied" class="star-4" id="star-4" />
		<label title="Rate Customer Pulse
Satisfied" class="star-4" for="star-4"></label>
		<input type="radio" onclick="show2();" name="cusen" value="Very_Satisfied" class="star-5" id="star-5" />
		<label title="Rate Customer Pulse
Very Satisfied" class="star-5" for="star-5"></label>
		<span></span>
	</div>
<div id="div1" class="hide">
<button class="stepsa" type="Submit" id="lletsubmit" value="Submit"> Submit </button>
</div>
</div>
<!-- Case Number, Emotion and Notes capture -->  
      <div class="w3-third">
        <div class="w3-round w3-margin-bottom">	
		<td id="frm"> 
<div name="llet" id="llet">
</div>	
</form>
		</div>
      </div>
      <div class="w3-third">
        <div class="w3-round">	
		<?php 
echo "<div hidden id='disfrm'>";
    //Include database configuration file
    require 'sqlconnect.php';
	$conn = connect();
if (isset ($_POST["test_text1"]) && !empty ($_POST["test_text1"])){
	$cusen = $conn->real_escape_string($_POST['cusen']);
	$srnum = $conn->real_escape_string($_POST['srnum']);
	$us_name = $conn->real_escape_string($_SESSION['us_name']);
	$test_text = $conn->real_escape_string($_POST['test_text']);
	$test_text1 = $conn->real_escape_string($_POST['test_text1']);
	$test_text2 = $conn->real_escape_string($_POST['test_text2']);
	$test_text3 = $conn->real_escape_string($_POST['test_text3']);
	$test_text4 = $conn->real_escape_string($_POST['test_text4']);
	$test_text5 = $conn->real_escape_string($_POST['test_text5']);
	$test_text6 = $conn->real_escape_string($_POST['test_text6']);
	$test_text7 = $conn->real_escape_string($_POST['test_text7']);
	$test_step1 = $conn->real_escape_string($_POST['test_step1']);
	$test_step2 = $conn->real_escape_string($_POST['test_step2']);
	$test_step3 = $conn->real_escape_string($_POST['test_step3']);
	$test_step4 = $conn->real_escape_string($_POST['test_step4']);
	$tool_content1 = $conn->real_escape_string($_POST['tool_content1']);
	$tool_content2 = $conn->real_escape_string($_POST['tool_content2']);
	$tool_content3 = $conn->real_escape_string($_POST['tool_content3']);
	$tool_content4 = $conn->real_escape_string($_POST['tool_content4']);
	$tool_content5 = $conn->real_escape_string($_POST['tool_content5']);
	$tool_content6 = $conn->real_escape_string($_POST['tool_content6']);
	$tool_content7 = $conn->real_escape_string($_POST['tool_content7']);
	$tool_content8 = $conn->real_escape_string($_POST['tool_content8']);
	$tool_content9 = $conn->real_escape_string($_POST['tool_content9']);
	$tool_content10 = $conn->real_escape_string($_POST['tool_content10']);
	$notes = $conn->real_escape_string($_POST['notes']);
	$icause = $conn->real_escape_string($_POST['icause']);
	$strtime = $conn->real_escape_string($_POST['strtime']);
	$query   = "INSERT INTO form (cusen,srnum,test_text,test_text1,test_text2,test_text3,test_text4,test_text5,test_text6,test_text7,us_name,test_step1,test_step2,test_step3,test_step4,tool_content1,tool_content2,tool_content3,tool_content4,tool_content5,tool_content6,tool_content7,tool_content8,tool_content9,tool_content10,notes,strtime,icause,c_month,c_year,c_date,dateposted) VALUES ('" . $cusen . "','" . $srnum . "','" . $test_text . "','" . $test_text1 . "','" . $test_text2 . "','" . $test_text3 . "','" . $test_text4 . "','" . $test_text5 . "','" . $test_text6 . "','" . $test_text7 . "','". $_SESSION["us_name"] ."','" . $test_step1 . "','" . $test_step2 . "','" . $test_step3 . "','" . $test_step4 . "','" . $tool_content1 . "','" . $tool_content2 . "','" . $tool_content3 . "','" . $tool_content4 . "','" . $tool_content5 . "','" . $tool_content6 . "','" . $tool_content7 . "','" . $tool_content8 . "','" . $tool_content9 . "','" . $tool_content10 . "','" . $notes . "','" . $strtime . "','" . $icause. "',MONTH(CURDATE()),YEAR(CURDATE()),CURDATE(),CURRENT_TIMESTAMP)";
	$success = $conn->query($query);	
	$last_id = mysqli_insert_id($conn);
    echo "UID # : "; echo "VT" . $_SESSION["us_name"] . ""; echo "". date("md") . ""; echo "" . $last_id; echo "<br>";
	echo "Case Owner : "; echo "<label style='margin-left:20px;'>" . $_SESSION["us_name"] . "</label><br><br>";
	echo "Customer Satisfaction : "; echo "<label style='margin-left:20px;'>" .$cusen. "</label><br><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text1. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text2. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text3. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text4. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text5. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text6. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_text7. "</label><br>";
	echo "Steps Added : <br><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_step1. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_step2. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_step3. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$test_step4. "</label><br>";
	echo "Tools Used : <br><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content1. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content2. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content3. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content4. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content5. "</label><br>";
	echo " > "; echo "<label style='margin-left:20px;'>" .$tool_content10. "</label><br>";
}	
	echo "</div>";		 
 ?>
<!-- <button id="lletsubmit" onclick="CopyToClipboard('disfrm')">Copy to Clipboard</button>	-->
		</div>
      </div>
    </div>
  </div>
  <!-- The Tool Tab Section -->
<!--  <div style="background-color: #e0e3e5; padding-top:30px; border-top: 3px solid #b7a752;">
    <div>
	  <nav  ng-app="tabDemoApp">
<div ng-controller="tabDemoController">
    <div class="dymenu">
      <ul id="dytabs">
		<li class="tooltip" onclick="myFun4()"><a href="#CHP" tab  class="current"> Collaboration Help <img class="linkimg" onclick="myFunctionCHP()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Collaboration Help </span></li>	  
		<li class="tooltip" onclick="myFun13()"><a href="#iPortal" tab > iPortal <img class="linkimg" onclick="myFunctioniPortal()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open iPortal </span></li>	  
        <li class="tooltip" onclick="myFun5()"><a href="#TA" tab  >Tech Alerts <img class="linkimg" onclick="myFunctionTA()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Technical Alerts </span></li>
        <li class="tooltip" onclick="myFun6()"><a href="#MATS" tab >MATS<img class="linkimg" onclick="myFunctionMATS()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open MATS </span></li>
        <li class="tooltip" onclick="myFun7()"><a href="#Topic2" tab >STAPS <img class="linkimg" onclick="myFunctionSTAPS()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open STAPS </span></li>
        <li class="tooltip" onclick="myFun14()"><a href="#reportcenter" tab >Report Center <img class="linkimg" onclick="myFunctionreportcenter()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Report Center</span></li>
        <li class="tooltip" onclick="myFun8()"><a href="#Topic3" tab >Jabber OrgLookup <img class="linkimg" onclick="myFunctionJabber()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Jabber OrgLookup </span></li>
        <li class="tooltip" onclick="myFun9()"><a href="#Custcomm" tab >Custcomm <img class="linkimg" onclick="myFunctionCustcomm()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Custcomm </span></li>
        <li class="tooltip" onclick="myFun10()"><a href="#controlhub" tab >Control Hub <img class="linkimg" onclick="myFunctioncontrolhub()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open Control Hub </span></li>
    <!--    <li class="tooltip" ><a href="#c3m" tab >C3M <img class="linkimg" onclick="myFunctionC3M()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open C3M </span></li>
        <li class="tooltip" ><a href="#csone" tab >CSone <img class="linkimg" onclick="myFunctionCSone()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open CSone </span></li> -->
		<!-- <li class="tooltip" onclick="myFun11()"><a href="#kb" tab >KB <img class="linkimg" onclick="myFunctionKB()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open KB </span></li>
		<li class="tooltip" onclick="myFun12()"><a href="#CloudBoard" tab >CloudBoard <img class="linkimg" onclick="myFunctionCB()" src="https://voltron.cisco.com/amp/img/link.png" height="22" width="22" style="margin-left:10px; float:right;"></a><span class="tooltiptext">Check open CloudBoard </span></li>
      </ul>
	  <div class="active dytabcont" id="CHP" target="myFrame6">
        <h2>Collaboration Help</h2>
        <iframe src="https://collaborationhelp.cisco.com/" width="100%" height="600" name="myFrame6"></iframe>
      </div>  
	  	  <div class="dytabcont" id="iPortal" target="myFrame6">
        <h2>iPortal</h2>
        <iframe src="https://iportal.corp.webex.com/" width="100%" height="600" name="iPortal"></iframe>
      </div>  
     <div class="dytabcont" id="TA" target="myFrame">
        <h2>Tech Alerts</h2>
        <iframe src="https://techalerts.cisco.com/" width="100%" height="600" name="myFrame"></iframe>
      </div>    
      <div class="  dytabcont" id="MATS" target="myFrame2">
        <h2>MATS</h2>
        <iframe src="https://mats.webex.com/page/home/realtime.jsp" width="100%" height="600" name="myFrame2"></iframe>
      </div>
      <div class="dytabcont" id="Topic2" target="myFrame3">
        <h2>STAPS</h2>
        <iframe src="https://stap.webex.com/stap/index.jsp" width="100%" height="600" name="myFrame3"></iframe>
      </div>
	   <div class="dytabcont" id="reportcenter" target="reportcenter">
        <h2>Report Center</h2>
        <iframe src="https://reportcenter.corp.webex.com/ReportCenter/" width="100%" height="600" name="reportcenter"></iframe>
      </div>
      <div class="dytabcont" id="Topic3" target="myFrame4">
        <h2>Jabber OrgLookup</h2>
        <iframe src="https://cats.webex.com/cats" width="100%" height="600" name="myFrame4"></iframe>
      </div>      
	  <div class="dytabcont" id="Custcomm" target="Custcomm">
        <h2>Custcomm</h2>
        <iframe src="https://custcomm.cisco.com/" width="100%" height="600" name="Custcomm"></iframe>
      </div>
	  	  <div class="dytabcont" id="controlhub" target="controlhub">
        <h2>Control Hub</h2>
        <iframe src="https://admin.ciscospark.com/" width="100%" height="600" name="controlhub"></iframe>
      </div>
	<!--  	 <div class="dytabcont" id="c3m" target="c3m">
        <h2>C3M</h2>
        <iframe src="https://cccm.my.salesforce.com/console" width="100%" height="1000" name="c3m"></iframe>
      </div> 
	  <div class="dytabcont" id="csone" target="csone">
        <h2>CSone</h2>
        <iframe src="https://csone.my.salesforce.com/console" width="100%" height="1000" name="csone"></iframe>
      </div> -->
	  <!--	  <div class="dytabcont" id="kb" target="kb">
        <h2>KB</h2>
        <iframe src="https://cisco-support.webex.com/guest/apex/pkb_MyRHome" width="100%" height="1000" name="kb"></iframe>
      </div>
		   <div class="dytabcont" id="CloudBoard" target="CloudBoard">
        <h2>Cloud Board</h2>
        <iframe src="https://cloudboard.cisco.com/web" width="100%" height="1000" name="CloudBoard"></iframe>
      </div>
    </div>
 </div>
</nav>	  
    </div>
  </div> -->
<!-- End Page Content -->
</div>
<!-- Footer -->
<div id="watermark_product">
<img src="https://voltron.cisco.com/amp/img/watermark-amp.png" style="width: 500px;height: 250px;" alt="Smiley face"></img>
</div>
<footer style="text-align: center; position: fixed; bottom: 0; width:100%; background-color:#252c33; height:35px; color: white; font-family: Arial,Helvetica,sans-serif; font-size:5px; ">
<p class="w3-medium">All content are Cisco Confidential and for internal use only,
Cisco-WebEx Feedback Loop <a href="#" target="_blank">.:|:AKBAR:|:.</a></p>
</footer>
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
function myFunctionCHP() {
    window.open("https://collaborationhelp.cisco.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
	
}

function myFunctionreportcenter() {
    window.open("https://reportcenter.corp.webex.com/ReportCenter/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
	
}

function myFunctionTA() {
    window.open("https://techalerts.cisco.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=400");
}

function myFunctionMATS() {
    window.open("https://mats.webex.com/page/home/realtime.jsp", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionSTAPS() {
    window.open("https://stap.webex.com/stap/index.jsp", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionJabber() {
    window.open("https://cats.webex.com/cats", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionCustcomm() {
    window.open("https://custcomm.cisco.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctioncontrolhub() {
    window.open("https://admin.ciscospark.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionC3M() {
    window.open("https://csone.my.salesforce.com/console", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionCSone() {
    window.open("https://csone.my.salesforce.com/console", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionKB() {
    window.open("https://cisco-support.webex.com/guest/apex/pkb_MyRHome", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctionCB() {
    window.open("https://cloudboard.cisco.com/web", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFunctioniPortal() {
    window.open("https://iportal.corp.webex.com/", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=200,width=1800,height=600");
}

function myFun4() {
    document.getElementById("myBtn1").value = "CHP";
}
function myFun5() {
    document.getElementById("myBtn").value = "TA";
}
function myFun6() {
    document.getElementById("myBtn3").value = "MATS";
}
function myFun7() {
    document.getElementById("myBtn2").value = "STAPS";
}
function myFun8() {
    document.getElementById("myBtn4").value = "JABORG";
}
function myFun9() {
    document.getElementById("myBtn5").value = "CUSTCOMM";
}
function myFun10() {
    document.getElementById("myBtn6").value = "CTRLHUB";
}
function myFun13() {
    document.getElementById("myBtn9").value = "iportal";
}
function myFun11() {
    document.getElementById("myBtn7").value = "KB";
}
function myFun12() {
    document.getElementById("myBtn8").value = "CLOURDBRD";
}

function myFun14() {
    document.getElementById("myBtn10").value = "ReportCenter";
}

</script>
</body>
</html>