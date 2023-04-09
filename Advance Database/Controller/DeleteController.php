<?php 
include("../Model/DB.php");

$sid=$_REQUEST["sid"];
echo $sid;


$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$userQuery=  $connection->DeleteStudent($conobj,"students",$sid);
$connection->CloseCon($conobj);
header("Location: ../View/StudentList.php");



?>