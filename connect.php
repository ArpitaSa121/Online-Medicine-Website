<?php
    $UserId = $_POST['User Id'];
    $EmailId = $_POST['Email Id'];
    $Password = $_POST['Password'];

    //database connection
    $conn = new mysqli('localhost','','test');
    if($conn->connect_error){
    	die('Connection Failed : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into username(User Id, Email Id, Password)
    		values(?, ?, ?)");
    	$stmt->bind_param("sss", $UserId, $EmailId, $Password);
    	$stmt->execute();
    	echo "registration successfully";
    	$stmt->close();
    	$conn->close();

    }
    
?>
   
