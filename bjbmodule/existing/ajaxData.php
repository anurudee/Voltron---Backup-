<?php

/* dbconfig file should be in same folder for DB connection */

include('dbConfig.php');

if(isset($_POST["base_id"]) && !empty($_POST["base_id"])){
    
	/* Geting all sub data */
	
    $query = $db->query("SELECT * FROM sub WHERE base_id = ".$_POST['base_id']." AND status = 1");
    
	/* Count total number of rows */
	
    $rowCount = $query->num_rows;
    
    //Display sub list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub_id'].'">'.$row['sub_name'].'</option>';
        }
    }else{
        echo '<option >Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub_id"]) && !empty($_POST["sub_id"])){
    //Get all sub1 data
    $query = $db->query("SELECT * FROM sub1 WHERE sub_id = ".$_POST['sub_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub1 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub1_id'].'">'.$row['sub1_name'].'</option>';
        }
    }else{
        echo '<option >Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub1_id"]) && !empty($_POST["sub1_id"])){
    //Get all sub2 data
    $query = $db->query("SELECT * FROM sub2 WHERE sub1_id = ".$_POST['sub1_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub2 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub2_id'].'">'.$row['sub2_name'].'</option>';
        }
    }else{
        echo '<option >Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub2_id"]) && !empty($_POST["sub2_id"])){
    //Get all sub3 data
    $query = $db->query("SELECT * FROM sub3 WHERE sub2_id = ".$_POST['sub2_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub3 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub3_id'].'">'.$row['sub3_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub3_id"]) && !empty($_POST["sub3_id"])){
    //Get all sub4 data
    $query = $db->query("SELECT * FROM sub4 WHERE sub3_id = ".$_POST['sub3_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub4 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub4_id'].'">'.$row['sub4_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub4_id"]) && !empty($_POST["sub4_id"])){
    //Get all sub4 data
    $query = $db->query("SELECT * FROM sub5 WHERE sub4_id = ".$_POST['sub4_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub4 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub5_id'].'">'.$row['sub5_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub5_id"]) && !empty($_POST["sub5_id"])){
    //Get all sub5 data
    $query = $db->query("SELECT * FROM sub6 WHERE sub5_id = ".$_POST['sub5_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub5 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub6_id'].'">'.$row['sub6_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub6_id"]) && !empty($_POST["sub6_id"])){
    //Get all sub6 data
    $query = $db->query("SELECT * FROM sub6 WHERE sub6_id = ".$_POST['sub6_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub7 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub7_id'].'">'.$row['sub7_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}

if(isset($_POST["sub7_id"]) && !empty($_POST["sub7_id"])){
    //Get all sub7 data
    $query = $db->query("SELECT * FROM sub7 WHERE sub7_id = ".$_POST['sub7_id']." AND status = 1");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display sub8 list
    if($rowCount > 0){
        echo '<option value="">Select Sub Tree</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['sub8_id'].'">'.$row['sub8_name'].'</option>';
        }
    }else{
        echo '<option>Click "+" to Provide your valuable input to build this flow.</option>';
    }
}


?>
