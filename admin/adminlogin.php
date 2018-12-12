<?php
// Start the session
session_start();
?>
<html>
<head>
<title> Voltron Admin Login </title>
<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

<div class="login-page">
  <div class="form" >
    <form class="login-form" action="" method="post">
	<h1>Admin Login</h1>
      <input required type="text" placeholder="Username" name="u_name"/>
      <input required type="password" placeholder="Password" name="u_password"/>
      <input style="font-family: sans-serif; text-transform: uppercase; outline: 0; background: #3CB371; width: 100%; border: 0; padding: 15px; color: #FFFFFF; font-size: 14px; -webkit-transition: all 0.3 ease; transition: all 0.3 ease; cursor: pointer;" type="Submit"></input>
	  <a href="https://voltron.cisco.com/amp/login/index.php" style=" text-decoration: none;">Not an Admin</a>
	</form>

<?php

if (isset($_POST['u_password'])) {
  // Media type field was posted
// Set session variables
$_SESSION["us_name"] = $_POST['u_name'];
echo "Session variables are set.";
}

?>
	
<?php

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

    $result = $conn->query("SELECT * FROM login WHERE status=1 AND u_name ='$u_name' AND u_password='$u_password' AND grp='Admin User' ");



    if (mysqli_num_rows($result)) {
        header ("Location: https://voltron.cisco.com/amp/admin/");
        //echo "login successful"; 	
    } 
    else
    {      
        echo "Login unsuccessful, contact anurudee for Admin credentials";     
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