

<?php 
    include ("../Controller/AdminLoginController.php");
    if(isset($_SESSION["Username"])){

        header("location: AdminDashboard.php");
      }
?>

<!DOCTYPE html>
<html>
<head>

<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design2.css">
<h1 font color='white'>Ice Cream Shop Management Systems </h1> 
</div> 

<?php  include 'AdminNav2.php'; ?>




    </div>

    <style>
       fieldset{
            margin-left:30%;
            margin-right:30%;
            /* margin-top:50px; */
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
     
    </style>

   
 
</head>

<body>
 
    <form method="post" onsubmit="return Validation()">
   
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
        <fieldset>
          <legend><b>Admin Login</b></legend>
           <table>
        <tr class="name">
            <td>
             Username: <br><br>
            </td>

            <td>
            <input type="text" name="username"><br><br>
            </td>
            <td class="err">
                <?php echo $errUser; ?></td>
        </tr>
        
        <tr>
            <td>
            Password:<br><br>
            </td>

            <td>
            <input type="password" name="password" id="password" ><br><br>
            </td>
            <td class="err">
            <p id="errorpass"></p>
            <?php echo $errPass; ?></td>
            <br>
        </tr>
           
         <tr>
             <td></td>
             <td>
             <input type="submit" name="submit" value="Login">
             </td>
             <td>
          
             </td>
         </tr>
            </table>
           
        </fieldset>
    </form>


    <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>


</body>

</html>