<?php 

include("WaiterNav.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>


<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design3.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div>

    <title>Dashboard</title>
     
   <style>

       .list{
        float:left;
        text-align:left;
       }
       body{
            background-image: url('Media/3.jpg');
        }
        a{
        font-size:20px;
        }
        h2.info{
            margin-left:20px;
            margin-bottom:5px;
        }
        h3{
    
            margin-left:8%;
            margin-bottom:5px;
        }
   </style>
</head>

   <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>
<body>
<h3><button><a href="IceCreamList.php?msg=" class='button'>Ice Cream List</a></button></h3>
<h3><button><a href="GenerateBill.php?msg=" class='button'>Order List</a></button></h3>
 <h3><button><a href="BillList.php" class='button'>Bill Generated List</a></button></h3>