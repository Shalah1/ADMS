<?php
include ("../Model/DB.php");


$errPhone =$errPass= "";
$err=false;

if (isset($_POST["submit"])) {
    $phone=$_REQUEST["phone"];
    $password=$_REQUEST["password"];

    if($phone ==""){
        $errPhone="Phone must enter";
        $err=true;
    }
    else {
        $errPhone="";
        $err=false;
    }


    if($password=="" || strlen($password)<5){
        $errPass="Password Must contains 5 character";
        $err=true;
    }
    else{
        $errPass="";
        $err=false;
    }

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $result=$connection->ManagerLogin($conobj,$phone,$password);
        // $num_row = oci_num_rows($result);
        // $row = oci_fetch_all($result, $both);
        $row = oci_fetch_all($result, $both);
        if ($row)
        {
           $_SESSION['Username']= "balchalheda";
           header("location: ../View/Home.php");
        }
    }

}

?>