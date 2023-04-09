<?php 
include ("../Controller/AdminRegistrationController.php");

?>

<!DOCTYPE html>
<html>

<head>

<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design1.css">
<h1 font color='white'> Ice Cream Shop Management Systems </h1> 
</div>

<?php include 'AdminNav2.php'; ?>



    <title> Registration </title> 
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
    <script src="../Javascript/UsernameValidation.js" ></script>
    <script src="../Javascript/RegistrationValidation.js" ></script>
</head>

<body>


    <form method="post" action="" onsubmit="return Validation()">
     

       <div>  
       <fieldset>
             <legend><b>Admin Registration</b></legend> 
           <table> 
            <tr>
                <td>Name : <br><br></td>
                <td> <input type="text" name="name" id="name" class="form-control" /> <br><br></td>
                <td class="err"> 
                    <p id="errorname"> </p>
                <?php echo $errName;?> <br><br>  </td>
            </tr>
         

            <tr>
                <td>
                <label>User Name : <br><br></label></td>
                <td> <input type="text" name="userName" id="username" class="form-control" /><br><br> </td>
                <td class="err">
                <p id="errorusername"> </p>    
                <?php echo $errUser;?> <br><br></td>
            </tr>
            <tr>
                <td>
                <label>Phone: <br><br></label></td>
                <td> <input type="text" name="phone" id="phone" class="form-control" /><br><br> </td>
                <td class="err">
                <p id="errorphone"> </p>    
                <?php echo $errPhone;?> <br><br></td>
            </tr>

            <tr>
                <td>
                <label>Password : <br><br></label></td>
                <td> <input type="Password" name="password" id="password" class="form-control" /><br> <br></td>
                <td class="err">
                <p id="errorpass"> </p>    
                <?php echo $errPass;?> <br><br></td>
            </tr>

            <tr>
                <td>
                <label>Address: <br><br></label></td>
                <td> <input type="text" name="address" id="address" class="form-control" /><br><br> </td>
                <td class="err">
                <p id="errorphone"> </p>    
                <?php echo $errAddress;?> <br><br></td>
            </tr>



            <tr>
                <td></td>
                <td class="btn">
                <input type="submit" name="submit" value="Submit" />
                
                </td>
               
            </tr>
            
           

    </div>
            </table>
      
        </fieldset>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <!-- <?php include 'Footer.php'; ?> -->
       
    </form>

    <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>
    
    <br />
</body>

</html>