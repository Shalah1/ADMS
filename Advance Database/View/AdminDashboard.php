<?php

session_start();
// include 'Header.php';


if (isset($_SESSION['Username'])) {
           
    include('AdminNav.php');
       
} 
else {
    header("location:CustomerLogin.php");
}
   
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





<h3><button><a href="PendingManager.php" class='button'>Pending Manager</a></button></h3>
<h3><button><a href="ManagerList.php" class='button'>Managers List</a></button></h3>
 <h3><button><a href="CustomerList.php" class='button'>Customers List</a></button></h3>
<!--<h3><button><a href="StudentSearch.php" class='button'>Search Student</a></button></h3>
<h3><button><a href="FacultySearch.php" class='button'>Search Faculty</a></button></h3>
<h3><button><a href="StudentList.php" class='button' >Student List</a></button></h3> -->

   



    
</body>
 
<!-- <?php include 'Footer.php'; ?> -->

</html>