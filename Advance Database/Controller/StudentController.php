<?php
include ("../Model/DB.php");
session_start();
$errName=$errEmail=$errUser=$errCredit=$errConfirmPass=$errDept=$errCgpa=$errPhone=$match="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Email=$_REQUEST["email"];
    $Username=$_REQUEST["userName"];
    $Credit=$_REQUEST["credit"];
    $Dept=$_REQUEST["dept"];
    $Phone=$_REQUEST["phone"];
    $Cgpa=$_REQUEST["cgpa"];

    if($Name=="" || strlen($Name)<6 ){
        $errName="Enter Your Name Please";
        $err=true;
    }
    else {
        $errName="";
        $err=false;
    }
    if($Username =="" || strlen($Username)<4){
        $errUser="Please Enter your username";
        $err=true;
    }
    else {
        $errUser="";
        $err=false;
    }
    if($Email==""){
        $errEmail="Valid Email Required";
        $err=true;
    }
    else{
        $errEmail="";
        $err=false;
    }
   

    if($Dept==""){
        $errDept="Please Write down your department";
        $err=true;
    }
    else{
        $errDept="";
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
    if($Credit==""){
        $errCredit="Please Write down your credit Completed";
        $err=true;
    }
    else{
        $errCredit="";
        $err=false;
    }
    if($Cgpa==""){
        $errCgpa="Please Write down your Cgpa";
        $err=true;
    }
    else{
        $errCgpa="";
        $err=false;
    }
  

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->AddStudent($conobj,"students",$Name,$Username,$Email,$Phone,$Dept,$Credit,$Cgpa);
        
        header("location: ../View/StudentList.php");
        $connection->CloseCon($conobj);

    }



}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>