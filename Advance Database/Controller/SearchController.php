<?php
include "..\Model\DB.php";
$Pid=$Pname=$Pdesc=$Pcat=$Pprice=""; 
$UserType="";
$hasError=false;
$error=""; 



$Pname=$_POST["pname"];
if($Pname=="")
{
  echo "Enter Property Name to Search Any Property !!"; 
}
else 
{
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$result=$connection->SearchProduct($conobj,$Pname);
while( ($row = oci_fetch_row($result)) != false) {

      $Pid=$row[0];
      $Pname=$row[1];
      $Quan=$row[2];
      $Pprice=$row[3];
      $Image=$row[4];

      echo "Product ID : ".$Pid."<br>";
      echo "<p style='color:#630f80;'>Product Name : ".$Pname."</p>";
      echo "<p style='color:#630f80;'>Product Name : ".$Quan."</p>";
      echo "<p style='color:#9e1653;'>Product price : ".$Pprice."</p></div><br>";
      echo "<td> <img src=".$Image." style='width:200px;border-radius:5px;'></td>";
      
     
      
//echo "Product Not Found !!!<br>";
}
}
?>