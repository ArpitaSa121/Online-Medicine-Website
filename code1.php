<?php
$host="localhost";
$user ="root";
$password="usbw";
$database ="test";
$conn =mysqli_connect($host, $user, $password, $database);
if(isset($_POST[$'submit'})){
if(!empty($_POST['userId']) &&!empty($_POST['email']) &&!empty($_POST['password'])){
    $userId=$_POST['userId'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    &query ="insert into username(userId,email,password) values('$userId','$email','$password')";
    &run =mysql_query($conn,$query) or die(mysql_error());
    if($run){
        echo"form submitted successfully";
    }
    else{
        echo"form not submitted";
 }
}
else{
    echo"all feilds required";
    



?>