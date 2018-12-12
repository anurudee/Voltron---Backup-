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
$id =$_GET['id'];

// including the database connection file
$databaseHost = 'localhost';
$databaseName = 'ciscoamp_db';
$databaseUsername = 'anurudee';
$databasePassword = 'ironport';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(isset($_POST['update']))
{	

	$test_text = mysqli_real_escape_string($mysqli, $_POST['test_text']);
	$test_text1 = mysqli_real_escape_string($mysqli, $_POST['test_text1']);
	$test_text2 = mysqli_real_escape_string($mysqli, $_POST['test_text2']);
	$test_text3 = mysqli_real_escape_string($mysqli, $_POST['test_text3']);
	$test_text4 = mysqli_real_escape_string($mysqli, $_POST['test_text4']);
	
	
	// checking empty fields
	if(empty($test_text) || empty($test_text1) || empty($test_text2)) {	
			
		if(empty($test_text)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($test_text1)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($test_text2)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE form SET c_persona='$c_persona',test_text='$test_text',test_text1='$test_text1',test_text2='$test_text2',test_text3='$test_text3',test_text4='$test_text4' WHERE id=$id");
		header("Location: mainpage_report.php?id=$id&C3SRNumber=$C3SRNumber");
	}
}

//getting id from url
$id = $_GET['id'];
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM form WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$test_text = $res['test_text'];
	$test_text1 = $res['test_text1'];
	$test_text2 = $res['test_text2'];
	$test_text3 = $res['test_text3'];
	$test_text4 = $res['test_text4'];

}
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js.js"></script>
<style>
body {
    line-height: 1.6;
    font-weight: 400;
    font-family: "HelveticaNeue", "Helvetica Neue", Helvetica, Arial, sans-serif;
    color: #222;
}

input.updt {
	    color: white;
    margin-top: -2%;
    margin-right: 3%;
    background: gray;
    padding: 3px 15px 3px 15px;
    border: none;
    border-radius: 5px;
    letter-spacing: 2px;
	text-decoration:none;
}

input.updt:hover {
	background: #6CC04A;
}

table#overall_cont {
    width: 60%;
}

table#overall_cont td{
    
}

a#back_btn {
    text-decoration: none;
    padding: 1px 5px 1px 5px;
    background: red;
    border-radius: 5px;
    color: white;
	margin: 0px 0px 0px 0px;
	float:right;
}

a#back_btn:hover {
    background: #4CAF50;
    color: white;
}

select {
    width: 90px;
}

</style>
</head>
<body>
<p style="margin: 12px 0px 10px -8px;font-weight:bold;font-family: Arial, Helvetica, sans-serif;color: rgb(34, 34, 34);font-size: 13px;">
Edit Recent Activity : <a id="back_btn" href="https://voltron.cisco.com/amp/bjbmodule/existing/edit_report.php?username=<?php echo $username;?>&tech=<?php echo $tech;?>&subtech=<?php echo $subtech;?>&Priority=<?php echo $Priority;?>&ProblemCode=<?php echo $ProblemCode;?>&ResolutionCode=<?php echo $ResolutionCode;?>&C3SRNumber=<?php echo $C3SRNumber;?>&DateCreated=<?php echo $DateCreated;?>&DateClosed=<?php echo $DateClosed;?>">Cancel Editing</a>
</p>
<form name="form1" method="post">
<table id="overall_cont">
<tr>
<td colspan="2">
       <?php
    //Include database configuration file
    include('dbConfig.php'); 
    //Get all BaseTree data
    $query = $db->query("SELECT * FROM basetree WHERE status = 1 ORDER BY base_name DESC");  
    //Count total number of rows
    $rowCount = $query->num_rows;
    ?>

<select class="minimal" REQUIRED name="BaseTree" id="BaseTree" onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text" onclick ="document.getElementById('sub').style.visibility = 'visible';">
        <option value="">Select Your Issue</option>
        <?php
        if($rowCount > 0){
            while($row = $query->fetch_assoc()){ 
                echo '<option value="'.$row['base_id'].'">'.$row['base_name'].'</option>';
            }
        }else{
            echo '<option value=""> Select Your Issue </option>';
        }
        ?>
</select>
<input type="hidden" name="test_text" id="text_content" value="" />
</td>
<td>
 <select style="visibility: hidden;" class="minimal" name="sub" id="sub" onchange="document.getElementById('text_content1').value=this.options[this.selectedIndex].text" onclick ="document.getElementById('sub1').style.visibility = 'visible';">
        <option value="">Select Subtree </option>
    </select>
	<input type="hidden" name="test_text1" id="text_content1" value="" />
</td>
<td>
<select style="visibility: hidden;" class="minimal" name="sub1" id="sub1" onchange="document.getElementById('text_content2').value=this.options[this.selectedIndex].text" onclick ="document.getElementById('sub2').style.visibility = 'visible';">
        <option value="">Select Subtree1</option>
    </select>
	<input type="hidden" name="test_text2" id="text_content2" value="" />
</td>
<td>
 <select style="visibility: hidden;" class="minimal" name="sub2" id="sub2" onchange="document.getElementById('text_content3').value=this.options[this.selectedIndex].text" onclick ="document.getElementById('sub3').style.visibility = 'visible';">
        <option value="">Select Subtree2</option>
    </select>
	<input type="hidden" name="test_text3" id="text_content3" value="" />
</td>
<td>
<select style="visibility: hidden;" class="minimal" name="sub3" id="sub3" onchange="document.getElementById('text_content4').value=this.options[this.selectedIndex].text;" onclick ="document.getElementById('updater').style.visibility = 'visible';">
        <option value="">Select Subtree3</option>
    </select>
	<input type="hidden" name="test_text4" id="text_content4" value="" />
</td>
<td>
<input style="visibility: hidden;" id="updater"  class="updt" type="submit" name="update" value="Update">
</td>
</tr>
</table>
<script>
function show(){
  document.getElementById('BaseTree').style.display = 'block';
}
</script>
</form>
</body>
</html>