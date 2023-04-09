<?php
    $db_username = "RUDRO";
    $db_password = "rudro";
    $connection_string="localhost/xe";
    $connection=oci_connect($db_username, $db_password, $connection_string);
    $s = oci_parse($connection, "select * from orders");
    oci_execute($s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>View Orders</title>
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
        <h1 font color='white'> View Orders </h1> 
    </div>
    <div>
        <?php include 'ManagerNav.php';?>
    </div>
    <div class="table-section">
        <table class="info-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Quantity</th>
                <th>Customer ID</th>
                <th>Icecream ID</th>
                <th>Waiter ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = oci_fetch_array($s, OCI_NUM+OCI_RETURN_NULLS)) {
                echo "<tr>";
                    echo "<td>".$row[0]."</td>";
                    echo "<td>".$row[1]."</td>";
                    echo "<td>".$row[2]."</td>";
                    echo "<td>".$row[3]."</td>";
                    echo "<td>".$row[4]."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>