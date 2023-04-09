<?php
include ("../Model/DB.php");

$errName=$errEmail=$errUser=$errPass=$errConfirmPass=$errDept=$errSalary=$errPhone=$match=$errAddress="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Password=$_REQUEST["password"];
    $Phone=$_REQUEST["phone"];

    if($Name==""){
        $errName="Enter Your Name Please";
        $err=true;
    }
    else {
        $errName="";
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
  
    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->ManagerRegistration($conobj,$Name,$Phone,$Password);


    }



}
?>