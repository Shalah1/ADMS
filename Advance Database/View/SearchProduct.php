<?php 
session_start();
if(empty($_SESSION["Phone"])) 
{
header("Location: ../View/login.php"); // Redirecting To Login Page
}
?>

<!DOCTYPE html>
<html>
<head>

<script src="../javascript/Search.js"> </script> 

<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design2.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div> 
      <style>
          table{
            border-collapse: collapse;
            border-radius:5px;
          }
          a{
              text-decoration:none;
          }
      </style>

</head> 


    
    <ul>
        <li><a href="ManagerDashboard.php">Home</a></li>
    </ul>

<br>
    <fieldset>
        <legend> Search Product </legend>
<div> 
Product Name: <input type=text name="pname" placeholder="Enter Your Product Name" id="pname" onkeyup ="showproduct()" ><br>
<p id="mytext"></p> 

</fieldset>
</div> 

</body>
</html>