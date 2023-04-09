<?php
// session_start();
include "..\Model\DB.php";
if(empty($_SESSION["Phone"])) 
{
header("Location: ../View/WaiterLogin.php"); // Redirecting To Login Page
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

<?php include "WaiterNav.php"; ?>
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design3.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div>
<br>
<center><h2>All Products</h2>

<h3><?php echo $_REQUEST["msg"]; ?></h3>
</center>


<fieldset>
    <legend>Available Products</legend>
    <table id="customers">
        <tr>
            <th>Id</th>
            <th>Ice-Cream Name</th>
            <th>Price</th>
            <th>Flavour</th>
            <th>Picture</th>
            <th>Action</th>
        </tr>
    

    <?php

$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();

$result=$connection->ShowAllProduct($conobj);


while( ($row = oci_fetch_row($result)) != false) {
    
        echo "<tr>";
      echo "<td>".$row[0]."</td>";
      echo "<td style='color:#630f80;'>".$row[1]."</td>";
      
      echo "<td>".$row[2]."<br>";
        echo "<td>".$row[3]."</td>";
      echo "<td> <img src=".$row[4]." style='width:100px;border-radius:5px;'></td>";
      echo "<td><a href=../Controller/Order.php?id=".$row[0]." style='color:blue;font-size:15';>Place Order</a>";
      // $_SESSION["IceCream"]=$row[1];
      // $_SESSION["Price"]=$row[2];
      // $_SESSION["Flavour"]=$row[3];
    
      echo "</tr>";
      echo "</div>";

    
}

?>
</table>
</fieldset>
<br>



</body>   
</html> 