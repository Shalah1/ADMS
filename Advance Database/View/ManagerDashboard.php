<?php 
    session_start();
    if(!isset($_SESSION['m_id']))
    {
        header('Location: ./ManagerLogin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../CSS/Tias.css">
<style>
    a{
        font-size:20px;
        text-decoration: none;
    }
    h3{
        margin-bottom:5px;
    }

    .center
    {
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-content: center;
        align-items: center;
        margin-bottom: 20px;
    }
    .button {
        background-color: #73a0c9;
        border: rgb(225, 62, 62);
        color: rgb(0, 0, 0);
        padding: 15px 32px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 5px 5px;
        width: 500px;
        cursor: pointer;
    }
</style>
</head>
<body>
    <div class = 'header sticky'>
        <h1 font color='white'> Ice-Cream Shop Management </h1> 
    </div>
    <div>
        <?php include 'ManagerNav.php';?>
    </div>
    <div class="center">
        <!-- <h3><button><a href="ManagerProfile.php" class='button'>Manager Profile</a></button></h3> -->
        <h3><button><a href="ManageWaiter.php" class='button'>Manage Waiters</a></button></h3>
        <h3><button><a href="ManageCashier.php" class='button'>Manage Cashiers</a></button></h3>
        <h3><button><a href="ViewChefs.php" class='button'>View Chefs</a></button></h3>
        <!-- <h3><button><a href="ViewOrders.php" class='button' >Orders</a></button></h3> -->
    </div>  
</body>
</html>