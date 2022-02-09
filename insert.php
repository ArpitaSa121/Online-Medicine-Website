<?php
    $UserId = $_POST['User Id'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if(!empty($userId) || !empty($email) || !empty($password)){
    	$host="localhost";
        $dbusername ="root";
        $dbpassword="usbw";
        $dbname ="test";
    
    	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    	if(mysqli_connect_error()) {
    		die('Connect Error('. mysqli_connect_error().')'. mysqli_connect_error());
    	}else {
    		$SELECT = "SELECT email From username Where email = ? Limit ";
    		$INSERT = "INSERT Into username(User id, Email, Password) values(?, ?, ?)";

    		$stmt = $conn ->prepare($SELECT);
    		$stmt->bind_param("s", $email);
    		$stmt->execute();
    		$stmt ->bind_result($email);
    		$stmt ->store_result();
    		$rnum = $stmt ->num_rows;
    		if($rnum==0) {
    			$stmt ->close();
    			$stmt = $conn ->prepare($INSERT);
    			$stmt->bind_param("sss", $UserId, $Email, $Password);
    			$stmt ->execute();
    			echo "New record inserted successfully";

    		}else {
    			echo "Someone already register using this email";

    	}
    	$stmt->close();
    	$conn->close();
    }


    }else {
    	echo "all field are required";
    	die();
    }
    ?>