<?php 
    if(isset($_POST['submit']))
    {
        $db_username = "RUDRO";
        $db_password = "rudro";
        $connection_string="localhost/xe";
        $connection=oci_connect($db_username, $db_password, $connection_string);

        if($_POST['id'] != "")
        {
            $id = $_POST['id'];
            $s = oci_parse($connection, "BEGIN SEARCH_WAITER(:id, :name, :phone, :salary); END;");
            oci_bind_by_name($s, ":id", $id);
            oci_bind_by_name($s, ":name", $name, 40);
            oci_bind_by_name($s, ":phone", $phone, 40);
            oci_bind_by_name($s, ":salary", $salary, 40);
            $result = oci_execute($s);
            if(!$result)
            {
                $error = oci_error($stmt);
                echo "Error: " . $error['message'] . "\n";
            }
            oci_close($connection);
        }
        else
        {
            header("location: SearchWaiter.php?error=empty");
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Waiter</title> 
    <link rel="stylesheet" type="text/css" href="../CSS/Tias.css">
    <style>
        fieldset{
            margin-left:30%;
            margin-right:30%;
            margin-top:50px;
            background-color: #c2c2d6;
        }
        input{
            border-radius:5px;
            font-size:15px;
            
            
        }
        .err{
            color:red;
            font-size:12px;
        }
        body{
            background-image: url('Media/4.jpg');
        }
     
    </style>
</head>

<body>
    <div class = 'header sticky'>
        <h1 font color='white'> Manage Waiters </h1> 
    </div>
    <div>
        <?php include 'ManagerNav.php';?>
    </div>

    <form method="POST" action="#">
        <fieldset>
          <legend><b>Search Waiter</b></legend>
           <table>
                <tr>
                    <?php
                        if(isset($_GET['error']))
                        {
                            echo "<b>Fill up the information correctly!</b>";
                        }
                    ?>
                </tr>
                <tr>
                    <td>Id: <br><br></td>
                    <td><input type="text" name="id"><br><br></td>
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Search"></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
        if(isset($name))
        {
            echo "<fieldset>";
            echo "<legend><b>Waiter Information</b></legend>";
            echo "<table>";
            echo "<tr>";
            echo "<td>Id: </td>";
            echo "<td>$id</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Name: </td>";
            echo "<td>$name</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Phone: </td>";
            echo "<td>$phone</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Salary: </td>";
            echo "<td>$salary</td>";
            echo "</tr>";
            echo "</table>";
            echo "</fieldset>";
        }
    ?>
</body>
</html>