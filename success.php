<?php 

$host="localhost";
$user="root";
$password="";
$db="test1";

mysql_connect($host,$id,$password);
mysql_select_db($db);

if(isset($_POST['UserId'])){
    
    $id=$_POST['UserId'];
    $password=$_POST['Password'];
    
    $sql="select * from login1 where id='".$UserId."'AND password='".$Password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
        }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>