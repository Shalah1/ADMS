<?php
// include ("../Model/DB.php");
// session_start();
$errName=$errEmail=$errUser=$errPass=$errConfirmPass=$errGender=$errPhone=$match="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Password=$_REQUEST["password"];
    $Phone=$_REQUEST["phone"];

    if($Name==""  ){
        $errName="Name is Not Correct";
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

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->UpdateManager($conobj,$Name,$Password,$_SESSION["Phone"]);
        if(isset($_SESSION["update"])){

            header("location: ../View/ManagerProfile.php");
          }
        
        else{
            echo "Failed";
        }
           
        

    }



}
if (isset($_POST["close"])) {
    header("Location: ../View/ManagerDashboard.php");
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>