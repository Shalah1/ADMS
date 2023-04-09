<?php
// session_start();
include "..\Model\DB.php";
if(empty($_SESSION["Username"])) 
{
header("Location: ../View/CustomerLogin.php"); // Redirecting To Login Page
}
?>
<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="CSS/design.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>

<?php include "ManagerNav.php"; ?>
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design3.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div>
<br>
<center><h2>All Products</h2></center>


<fieldset>
    <legend>Available Products</legend>
    <table id="customers">
        <tr>
            <th>Id</th>
            <th>Product Name</th>

            <th>Price</th>
            <th>Stock</th>
            <th>Picture</th>
        </tr>
    

    <?php

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

$result=$connection->ShowAllProduct($conobj);


while( ($row = oci_fetch_row($result)) != false) {
    
        echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td style='color:#630f80;'>".$row[1]."</td>";
      
      echo "<td>".$row[3]."<br>";
      if($row[2]>0){
        echo "<td>In-Stock<br>";
      }
      else{
        echo "<td>Not Available<br>";
      }
      echo "<td> <img src=".$row[4]." style='width:100px;border-radius:5px;'></td>";
      $_SESSION["PNAME"]=$row[1];
      $_SESSION["Price"]=$row[3];
    
      echo "</tr>";
      echo "</div>";

    
}

?>
</table>
</fieldset>
<br>



</body>   
</html> 