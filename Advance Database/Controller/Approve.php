<?php 
include("../Model/DB.php");
$id=$_REQUEST["id"];

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$result=$connection->ApproveManager($conobj,$id);  
// $row = oci_num_rows($result);

if(isset($_SESSION["check"])){

    header("location: ../View/PendingManager.php");
  }

else{
    echo "Failed";
}
   





?>