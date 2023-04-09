<?php
include ("../Model/DB.php");

$errName=$errEmail=$errUser=$errPass=$errConfirmPass=$errDept=$errSalary=$errPhone=$match=$errAddress="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Salary=$_REQUEST["salary"];
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
    if($Salary ==""){
        $errUser="Please Enter Salary";
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
    
  
    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AddWaiter($conobj,$Name,$Salary,$Phone,$Password);


    }



}
?>