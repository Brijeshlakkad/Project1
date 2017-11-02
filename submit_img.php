<?php
include("config.php");
session_start(); 

    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));

        /*
         * Insert image data into database
         */
        
        //Create connection and select DB
        $id=$_SESSION['event_id'];
		date_default_timezone_get("asia,kolkata");
        $dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = mysqli_query($con,"Update events SET Image='$imgContent',Created='$dataTime' where ID='$id'");
        if($insert){
            echo "File uploaded successfully.";
			echo "<a href='upload_event.php'>want to add one more event?</a>";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
?>