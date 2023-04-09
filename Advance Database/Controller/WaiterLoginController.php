<?php
include ("../Model/DB.php");


$errUser =$errPass= "";
$err=false;

if (isset($_POST["submit"])) {
    $phone=$_REQUEST["phone"];
    $password=$_REQUEST["password"];

    if($phone ==""){
        $errUser="phone must enter";
        $err=true;
    }
    else {
        $errUser="";
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
        $result=$connection->WaiterLogin($conobj,$phone,$password);
        // $num_row = oci_num_rows($result);
        // $row = oci_fetch_all($result, $both);
        $row = oci_fetch_all($result, $both);
        if ($row)
        {
           header("location: ../View/Home.php");
        }
    }

}

?>