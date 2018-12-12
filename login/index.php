<?php
// Start the session
session_start();
?>
<html>
<head>
<title> Voltron Login </title>
<link rel="icon" href="https://voltron.cisco.com/amp/img/logo.png" width type="image/ico">
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<div class="login-page">
  <div class="form" >
    <form class="login-form" method="post">
	<h1>User Login</h1>
      <input required type="text" placeholder="Username" name="u_name"/>
      <input type="password" placeholder="Press 'Spacebar' and click SUBMIT" name="u_password"/>
      <input style="font-family: sans-serif; text-transform: uppercase; outline: 0; background: #29B6F6; width: 100%; border: 0; padding: 15px; color: #FFFFFF; font-size: 14px; -webkit-transition: all 0.3 ease; transition: all 0.3 ease; cursor: pointer;" type="Submit"></input>
	  <br>
	  <br>
	<a href="https://voltron.cisco.com/amp/admin/adminlogin.php" style=" text-decoration: none;">Admin Portal Login</a>
	</form>
	
<?php

if (isset($_POST['u_password'])) {
  // Media type field was posted
// Set session variables
$_SESSION["us_name"] = $_POST['u_name'];
echo "Session variables are set.";
}

    $servername = "localhost";
    $username = "anurudee";
    $password = "ironport";
    $dbname = "manageampusers";
	
 $conn = new mysqli($servername, $username, $password, $dbname);
 
 if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
	
 if(!empty($_POST['u_name']) && !empty($_POST['u_password'])) {
	
    $u_name = mysqli_real_escape_string($conn, $_POST['u_name']); 
    $u_password = mysqli_real_escape_string($conn, $_POST['u_password']);     

    $result = $conn->query("SELECT * FROM login WHERE status = 1 AND u_name ='$u_name' AND u_password='$u_password'");

    if (mysqli_num_rows($result)) {
        header ("Location: https://voltron.cisco.com/amp/");
        //echo "login successful"; 	
    } 
    else
    {      
        echo "login unsuccessful, please try again";     
    }
    $conn->close();
 }
 
?>
  </div>
</div>

<script>
$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

</body>
</html>