<?php
 
require 'connection.php';
require "loginheader.php";

$conn = Connect2();

$name    = $conn->real_escape_string($_POST['names']);
$times    = $conn->real_escape_string($_POST['apptime']);
$user    = $conn->real_escape_string($_SESSION['username']);
$date    = $conn->real_escape_string($_POST['appdate']);

$ajay = '0';
$naveen = '0';
$gagan = '0';
$awantika = '0';
$sreshtha = '0';
$shubham = '0';

if (empty($name) ||  empty($times) || empty($date)  ){
    $error = "Complete all fields";
    echo $error;    
}
else{
    if(!strcmp($name,"Dr. Ajay Gupta")){
        $ajay = '1';

    }
    else if(!strcmp($name,"Dr. Naveen Chhatwal")){
        $naveen = '1';

    }
    else if(!strcmp($name,"Dr. Awantika Jain")){
        $awantika = '1';

    }
    else if(!strcmp($name,"Dr. Shubham Mishra")){
        $shubham = '1';

    }
    else if(!strcmp($name,"Dr. Gagandeep Singh")){
        $gagan = '1';

    }
    else{
        $sreshtha = '1';

    }
    
    $query = "DELETE FROM appoint WHERE  `username` = '".$user."' AND `time` = '".$times."' AND `date` = '".$date."' AND `ajay` = '".$ajay."' AND `naveen` = '".$naveen."' AND `awantika` = '".$awantika."' AND `shubham` = '".$shubham."' AND `gagandeep` = '".$gagan."' AND `sreshtha` = '".$sreshtha."'";
    echo $query;
    $success = $conn->query($query);
    
echo "appointment canceled";

}


       
echo "\r\nRedirecting...";


 
$conn->close();
 
?>
<meta http-equiv="refresh" content="2; url=../index.php" />