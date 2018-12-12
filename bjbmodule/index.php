<?php
session_start();
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
$CEmail =$_GET['CEmail'];
?>
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml">
<link rel="icon" href="https://voltron.cisco.com/AMP/img/logo.png" width type="image/ico">
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
    font-family: 'SalesforceSans-Regular',Helvetica,Arial,sans-serif;
    font-size: 12.5px;
    color: #16325c;
    font-weight: normal;
}
.mySlides {
	display: none
	}

.hide {
  display: none;
}

div#watermark_product {
    position: absolute;
    margin: 25% 0% 0% 0%;
}

div#editable-frame {
    position: absolute;
    width: 100%;
    z-index: 3;
    margin: 4% 0% 0% 0%;
    padding: 1%;
}

div#existing_case {
    position: absolute;
    z-index: 2;
    width: 100%;
    margin: 0% 0% 0% 0%;
}
</style>
<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
	<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large"><img class="vlogo" src="https://voltron.cisco.com/AMP/img/logo.png" /></a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">Menu  <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="https://voltron.cisco.com/amp/report/supview/index.php" target="_blank" class="w3-bar-item w3-button">Supervisor View</a>
        <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php" target="_blank" class="w3-bar-item w3-button">Input Management</a>
		<a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php" target="_blank" class="w3-bar-item w3-button">Detractor Management</a>
		<a href="https://voltron.cisco.com/amp/admin/dashboard/index.php" target="_blank" class="w3-bar-item w3-button">Dashboard</a>
      </div>
    </div> 
<a href="#" class="w3-bar-item w3-button w3-padding-large">
<!-- <div id="box"></div> -->
	<div class="">
      <span class="" style="font-size: inherit;letter-spacing: 2px;font-weight: bold;">
        Digitize Your Case <!--Padding is optional-->
      </span>
    </div></a>
<a style="text-decoration:none;" href="#" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> 
<?php
// Echo session variables that were set on previous page
echo $us_name; ?> 
</a>
<a style="text-decoration:none;" href="https://voltron.cisco.com/amp/" class="w3-padding-large w3-hover-red w3-hide-small w3-right"> Logout </a>
<a href="#" class="green_amp"><img onclick="window.open('https://amptgstatus.statuspage.io/#', 'Popup Window', 'width=600, height=600, top=70, left=100, resizable=1, menubar=yes', true);" title="Check AMP Status" class="green_amp" src="https://voltron.cisco.com/AMP/img/circle.png" alt="Tools Link" width="8" height="8"></a>
  </div>
</div>
<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:59px">
  <a href="https://voltron.cisco.com/amp/report/supview/index.php?username=<?php echo $username; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large">Supervisor View</a>
  <a href="https://voltron.cisco.com/amp/report/inputmgmt/index.php?username=<?php echo $username; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large" >Input Management</a>
  <a href="https://voltron.cisco.com/amp/report/detractormgmt/index.php?username=<?php echo $username; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large" >Detractor Management</a>
  <a href="https://voltron.cisco.com/amp/admin/dashboard/index.php?username=<?php echo $username; ?>" target="_blank" class="w3-bar-item w3-button w3-padding-large" >Dashboard</a>
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

// function show2(){
  // document.getElementById('div1').style.display = 'block';
// }
</script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	
<label id="cusenlbl">Perceived Customer Sentiment:</label>		
<div id="cusen1" title="Rate Customer Pulse" class="stars">
		<input  type="radio" onclick="show2();" name="cusen"  value="Very_Unsatisfied" class="star-1" id="star-1" />
		<label title="Rate Customer Pulse
Very Unsatisfied" id="cusen1" class="star-1"  for="star-1"></label>
		<input type="radio" onclick="show2();" name="cusen" value="Unsatisfied" class="star-2" id="star-2" />
		<label title="Rate Customer Pulse
Unsatisfied" class="star-2" for="star-2"></label>
		<input required type="radio" onclick="show2();" name="cusen" value="Neutral" class="star-3" id="star-3" />
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
<hr>
<div class="select-boxes" id="select-boxes">
    <?php
    //Include database configuration file
    include('dbConfig.php'); 
    //Get all BaseTree data
    $query = $db->query("SELECT * FROM sub WHERE status = 1 ORDER BY sub_id ASC");  
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>
	<input readonly type="text" style="color:green; font-weight:bold; font-size: 13px; font-family:  'SalesforceSans-Regular',Helvetica,Arial,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="test_text" value="AMP for End Points" /></input>
	<input readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:green; font-weight:bold; font-size: 13px; font-family:  'SalesforceSans-Regular',Helvetica,Arial,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="srnum" value="<?php echo $C3SRNumber; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="us_name" value="<?php echo $username; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="tech" value="<?php echo $tech; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="subtech" value="<?php echo $subtech; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="Priority" value="<?php echo $Priority; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="ProblemCode" value="<?php echo $ProblemCode; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="ResolutionCode" value="<?php echo $ResolutionCode; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="DateCreated" value="<?php echo $DateCreated; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="DateClosed" value="<?php echo $DateClosed; ?>" /></input> 
	<input hidden readonly type="text" style="width: 34%;padding: 3px 3px 3px 10px;letter-spacing: 1px;margin-left: 3%;float: right;color:#007700 !important; font-weight:bold; font-size: 14px; font-family: Arial,Helvetica,sans-serif; letter-spacing: .5px;border:none; background-color:transparent; margin-left:1%;" name="CEmail" value="<?php echo $CEmail; ?>" /></input> 
	<!-- <input readonly type="Text" style="border:none" name="srnum" id="srnum" value="<?php echo $C3SRNumber; ?>"></input> -->
    <br>
	<br>
    <select class="minimal" name="sub" id="sub" onchange="document.getElementById('text_content1').value=this.options[this.selectedIndex].text" style="display:block;margin-bottom:  10px;">
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
    <select class="minimal" name="sub1" id="sub1" onchange="document.getElementById('text_content2').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree1</option>
    </select>
	<input type="hidden" name="test_text2" id="text_content2" value="" />

    <select class="minimal" name="sub2" id="sub2" onchange="document.getElementById('text_content3').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree2</option>
    </select>
	<input type="hidden" name="test_text3" id="text_content3" value="" />

    <select class="minimal" name="sub3" id="sub3" onchange="document.getElementById('text_content4').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree3</option>
    </select>
	<input type="hidden" name="test_text4" id="text_content4" value="" />

    <select class="minimal" name="sub4" id="sub4" onchange="document.getElementById('text_content5').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree4</option>
    </select>
	<input type="hidden" name="test_text5" id="text_content5" value="" />

    <select class="minimal" name="sub5" id="sub5" onchange="document.getElementById('text_content6').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree5</option>
    </select>
	<input type="hidden" name="test_text6" id="text_content6" value="" />

    <select class="minimal" name="sub6" id="sub6" onchange="document.getElementById('text_content7').value=this.options[this.selectedIndex].text" style="margin-bottom:  10px;">
        <option value="">Select Subtree6</option>
    </select>
	<input type="hidden" name="test_text7" id="text_content7" value="" />
	</div>	
		</div>
<hr>
<textarea style="border-radius:5px;" name="notes" rows="1" cols="50" id="notes" Placeholder="Add your notes here....." ></textarea><br>
<hr>
<div class="amp_btn">
 <a id="stepsa" style="margin-right:2%; float:right;" onclick="myFunction100()" title="Add Flows" value="+"> Provide Feedback: <img src="https://voltron.cisco.com/AMP/img/survey.png" alt="Add Flows" width="24" height="24"> </a>
<a id="stepsa" style="margin-right:5%; float:right;" onclick="myFunction101()" title="Tools & Links" value="+"> Tools Access: <img src="https://voltron.cisco.com/AMP/img/linkb.png" alt="Tools Link" width="24" height="22" </a>
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
$('#form1').submit(function() {
    if ($('input:checkbox', this).is(':checked') &&
        $('input:radio', this).is(':checked')) {
        // everything's fine...
    } else {
        alert('Please select something!');
        return false;
    }
});
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
<textarea style="border-radius:5px;margin:  0px;width: 96%;" name="test_step1" rows="1" cols="50" id="notes" Placeholder="Add Step 1..." ></textarea><br>
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
<script>
$(document).ready(function(){
    $("form").submit(function(){
        alert("Voltron Case Submitted by <?php echo $username; ?>");
    });
});
</script>
<hr>
<div id="div1" class="hide" style="display: block;">
<button class="stepsa" type="Submit" id="lletsubmit" value="Submit"> Submit ( Digitize this case ) </button>
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
	$us_name = $conn->real_escape_string($_POST['us_name']);
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
	$tech = $conn->real_escape_string($_POST['tech']);
	$subtech = $conn->real_escape_string($_POST['subtech']);
	$Priority = $conn->real_escape_string($_POST['Priority']);
	$ProblemCode = $conn->real_escape_string($_POST['ProblemCode']);
	$ResolutionCode = $conn->real_escape_string($_POST['ResolutionCode']);
	$DateCreated = $conn->real_escape_string($_POST['DateCreated']);
	$DateClosed = $conn->real_escape_string($_POST['DateClosed']);
	$CEmail = $conn->real_escape_string($_POST['CEmail']);
	$notes = $conn->real_escape_string($_POST['notes']);
	$icause = $conn->real_escape_string($_POST['icause']);
	$strtime = $conn->real_escape_string($_POST['strtime']);
	$query   = "INSERT INTO form (cusen,srnum,test_text,test_text1,test_text2,test_text3,test_text4,test_text5,test_text6,test_text7,us_name,test_step1,test_step2,test_step3,test_step4,tool_content1,tool_content2,tool_content3,tool_content4,tool_content5,tool_content6,tool_content7,tool_content8,tool_content9,tool_content10,tech,subtech,Priority,ProblemCode,ResolutionCode,DateCreated,DateClosed,CEmail,notes,strtime,icause,c_month,c_year,c_date,dateposted) VALUES ('" . $cusen . "','" . $srnum . "','" . $test_text . "','" . $test_text1 . "','" . $test_text2 . "','" . $test_text3 . "','" . $test_text4 . "','" . $test_text5 . "','" . $test_text6 . "','" . $test_text7 . "','". $us_name ."','" . $test_step1 . "','" . $test_step2 . "','" . $test_step3 . "','" . $test_step4 . "','" . $tool_content1 . "','" . $tool_content2 . "','" . $tool_content3 . "','" . $tool_content4 . "','" . $tool_content5 . "','" . $tool_content6 . "','" . $tool_content7 . "','" . $tool_content8 . "','" . $tool_content9 . "','" . $tool_content10 . "','" . $tech . "','" . $subtech . "','" . $Priority . "','" . $ProblemCode . "','" . $ResolutionCode . "','" . $DateCreated . "','" . $DateClosed . "','" . $CEmail . "','" . $notes . "','" . $strtime . "','" . $icause. "',MONTH(CURDATE()),YEAR(CURDATE()),CURDATE(),CURRENT_TIMESTAMP)";
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

</div>
<div id="existing_case">
<iframe style="border: none; max-height: 90px;" scrolling="no" width="100%" src="https://voltron.cisco.com/amp/bjbmodule/existing/index.php?username=<?php echo $username;?>&tech=<?php echo $tech;?>&subtech=<?php echo $subtech;?>&Priority=<?php echo $Priority;?>&ProblemCode=<?php echo $ProblemCode;?>&ResolutionCode=<?php echo $ResolutionCode;?>&C3SRNumber=<?php echo $C3SRNumber;?>&DateCreated=<?php echo $DateCreated;?>&DateClosed=<?php echo $DateClosed;?>"></iframe>
</div>
<div id="editable-frame">
<iframe style="border: none; max-height: 90px;" scrolling="no" width="100%" src="https://voltron.cisco.com/amp/bjbmodule/existing/edit_report.php?username=<?php echo $username;?>&tech=<?php echo $tech;?>&subtech=<?php echo $subtech;?>&Priority=<?php echo $Priority;?>&ProblemCode=<?php echo $ProblemCode;?>&ResolutionCode=<?php echo $ResolutionCode;?>&C3SRNumber=<?php echo $C3SRNumber;?>&DateCreated=<?php echo $DateCreated;?>&DateClosed=<?php echo $DateClosed;?>"></iframe>
</div>
<div id="watermark_product">
<img src="https://voltron.cisco.com/amp/img/watermark-amp.png" style="width: 500px;height: 250px;" alt="Smiley face"></img>
</div>
<!-- Footer -->
<footer style="text-align: center; position: fixed; bottom: 0; width:100%; background-color:#252c33; height:35px; color: white; font-family: Arial,Helvetica,sans-serif; font-size:5px; ">
<!-- <p class="w3-medium">How-To use voltron <a href="#" target="_blank">Click Here</a> to watch a video tutorial</p> -->
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
// $('select').hover(function(){
//    var count = $(this).children().length;
//    $(this).attr('size', count);
// },function(){
//    $(this).removeAttr('size');
// });
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

<script>
function myFunction988() {
    var z = document.getElementById("lletsubmit");
    if (z.style.display === "none") {
        z.style.display = "block";
    } else {
        z.style.display = "block";
    }
}
</script>

</body>
</html>