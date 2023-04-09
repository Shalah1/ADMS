<?php
include ("../Model/DB.php");

$errName=$errEmail=$errUser=$errPass=$errConfirmPass=$errDept=$errSalary=$errPhone=$match=$errAddress="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Username=$_REQUEST["userName"];
    $Password=$_REQUEST["password"];
    $Phone=$_REQUEST["phone"];
    $Address=$_REQUEST["address"];

    if($Name==""){
        $errName="Enter Your Name Please";
        $err=true;
    }
    else {
        $errName="";
        $err=false;
    }
    if($Username ==""){
        $errUser="Please Enter your username";
        $err=true;
    }
    else {
        $errUser="";
        $err=false;
    }

    if($Password=="" || strlen($Password)<5){
        $errPass="Password Must be more than 4 character";
        $err=true;
    }
    else{
        $errPass="";
        $err=false;
    }
    
    if($Phone==""){
        $errPhone="Please Write down your Phone Number";
        $err=true;
    }
    else{
        $errPhone="";
        $err=false;
    }
    if($Address==""){
        $errAddress="Please Write down your Address";
        $err=true;
    }
    else{
        $errAddress="";
        $err=false;
    }
    
  
    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AdminRegistration($conobj,$Name,$Username,$Phone,$Password,$Address);


    }

}
?>