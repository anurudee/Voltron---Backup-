<!DOCTYPE html>
<html>
<link rel="icon" href="https://voltron.cisco.com/amp/img/logo.png" width type="image/ico">
<head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}</style><title>Voltron</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style/style.css">
<link rel="stylesheet" href="style/style1.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
<script src="jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>
<script src="js.js"></script>
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<!-- Access restriction ONLY accessible when logged in -->

<?php
    if ($_SERVER['HTTP_REFERER'] == "http://voltron.cisco.com/amp/login/index.php") {
        // continue
    } else {
        header("Location: http://voltron.cisco.com/amp/login/index.php");
        exit(); //Stop running the script
        // go to form page again.
    }
?>


</head><body style="">

<!-- FRAME CONTENT -->

  <div style="width:100%;">
	  <iframe scrolling="yes" frameborder="0" style="overflow: hidden; height: 100%; width: 100%; position: absolute; left: 0px; padding: 0px 0px 0px 0px;" height="100%" width="100%" id="vform" src="https://voltron.cisco.com/amp/mainpage.php"></iframe>
  </div>



<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>

</html>
