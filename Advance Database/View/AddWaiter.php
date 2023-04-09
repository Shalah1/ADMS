<?php 
    if(isset($_POST['submit']))
    {
        $db_username = "RUDRO";
        $db_password = "rudro";
        $connection_string="localhost/xe";
        $connection=oci_connect($db_username, $db_password, $connection_string);

        if($_POST['name'] != "" && $_POST['phone'] != "" && $_POST['salary'] != "" && $_POST['password'] != "")
        {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $salary = $_POST['salary'];
            $password = $_POST['password'];

            $s = oci_parse($connection, "BEGIN add_waiter(:name, :phone, :salary, :password); END;");
            oci_bind_by_name($s, ":name", $name);
            oci_bind_by_name($s, ":phone", $phone);
            oci_bind_by_name($s, ":salary", $salary);
            oci_bind_by_name($s, ":password", $password);
            oci_execute($s);
            oci_close($connection);
            header("Location: ./ManageWaiter.php");
        }
        else
        {
            header("location: AddWaiter.php?error=empty");
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
          <legend><b>Add Waiter</b></legend>
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
                    <td>Name: <br><br></td>
                    <td><input type="text" name="name"><br><br></td>
                </tr>
                <tr>
                    <td>Phone:<br><br></td>
                    <td><input type="text" name="phone"><br><br></td>
                </tr>
                <tr>
                    <td>Salary:<br><br></td>
                    <td><input type="text" name="salary"><br><br></td>
                </tr>
                <tr>
                    <td>Password:<br><br></td>
                    <td><input type="password" name="password"><br><br></td>
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Add"></td>
                </tr>
            </table>
        </fieldset>
    </form>

</body>
</html>