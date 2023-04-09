<?php 
    // include ("../Controller/ManagerLoginController.php");
    // if(isset($_SESSION["Phone"])){

    //     header("location: ManagerDashboard.php");
    //   }
     
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Tias.css">
    <style>
       fieldset{
            margin-left:30%;
            margin-right:30%;
        }
        input{
            font-size:15px;
            
        }
        .err{
            color:red;
        }   
    </style>
</head>

<body>
    <div class = 'header sticky'> 
    <h1 font color='white'> Ice Cream Shop </h1> 
</div> 
</div>

    <?php  include 'ManagerNav2.php'; ?>

    <form method="post" action="../Controller/ManagerController.php">

        <fieldset>
          <legend><b>Manager Login</b></legend>
           <table>
                <tr>
                    <?php
                        if(isset($_GET['error']))
                        {
                            echo "<b>Invalid Id or Password!</b>";
                        }
                    ?>
                </tr>
                <tr>
                    <td>Id: <br><br></td>
                    <td><input type="text" name="id" id="id"><br><br></td>
                </tr>
                <tr>
                    <td>Password:<br><br></td>

                    <td><input type="password" name="password" id="password" ><br><br></td>
                </tr>
                <tr>
                <td><input type="submit" name="submit" value="Login"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>