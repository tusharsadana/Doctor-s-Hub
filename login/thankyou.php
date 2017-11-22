<?php
 
require 'connection.php';
require "login/loginheader.php";

$conn = Connect2();

$name    = $conn->real_escape_string($_POST['names']);
$time    = $conn->real_escape_string($_POST['apptime']);
$user    = $conn->real_escape_string($_SESSION['username']);
$ajay = 0;
$naveen = 0;
$gagan = 0;
$awantika = 0;
$sreshtha = 0;
$shubham = 0;

if (empty($name) ||  empty($time)){
    $error = "Complete all fields";
    
}
else{
    if(!strcmp($name,"Dr. Ajay Gupta"){
        $ajay = 1;

    }
    else if(!strcmp($name,"Dr. Naveen Chhatwal"){
        $naveen = 1;

    }
    else if(!strcmp($name,"Dr. Awantika Jain"){
        $awantika = 1;

    }
    else if(!strcmp($name,"Dr. Shubham Mishra"){
        $shubham = 1;

    }
    else if(!strcmp($name,"Dr. Gagandeep Singh"){
        $gagan = 1;

    }
    else{
        $sreshtha = 1;

    }
    $query = "INSERT INTO `appoint`(`ajay`, `naveen`, `awantika`, `shubham`, `gagandeep`, `sreshtha`, `username`, `time`) VALUES ('" . $ajay . "','" . $naveen . "','" . $awantika . "','" . $shubham . "','" . $gagan . "','" . $sreshtha . "','" . $user . "','" . $time . "')";
    $success = $conn->query($query);
}


    

       
 
header("Location: index.html");
 
$conn->close();
 
?>