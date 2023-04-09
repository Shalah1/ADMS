<?php 
include("../Model/DB.php");
include ("../Controller/UpdateController.php");

include 'ManagerNav.php';
// session_start();

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();
$result=$connection->ManagerData($conobj,$_SESSION["Phone"]);



    // output data of each row
    while( ($row = oci_fetch_row($result)) != false) {
 

        ?>
<!DOCTYPE html>
<html>

<head>
    
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design2.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div> 


    <title> update </title>
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
        a{
            color:black;
        }
        img{
            border-radius:20px;
            width:160px;
            margin-bottom:20px;
        }
     
    </style>
</head>

<body>

    <form method="post" action="" enctype="multipart/form-data">
     

        
       <fieldset>
    <legend><b>Profile Information</b></legend><br>
          
     
          <table> 

            <tr>
                <td>Name : <br><br></td>
                <td> <input type="text" name="name" class="form-control" value="<?php echo $row[1]; ?>" /> <br><br></td>
                <td class="err"> <?php echo $errName;?> <br><br>  </td>
            </tr>
         
            <tr>
                <td>
                <label>Phone Number : <br><br></label></td>
                <td> <input type="text" name="phone" class="form-control" value="<?php echo $row[2]; ?>" readonly/><br><br> </td>
                <td class="err"><?php echo $errUser;?> <br><br></td>
            </tr>

            <tr>
                <td>
                <label>Password : <br><br></label></td>
                <td> <input type="password" name="password" class="form-control" value="<?php echo $row[3];?>"/><br> <br></td>
                <td class="err"><?php echo $errPass;?> <br><br></td>
            </tr>

            <tr>
                <td></td>
                <td class="btn">
                <input type="submit" name="submit" value="Update"/>
                <!-- <button><a href="">Close</a></button> -->
                <input type="submit" name="close" value="Close"/>
                </td>
               
            </tr>
            
           
<?php   
    }
?>
          
            </table>
           
        </fieldset>
       
    </form>
    <div class= 'footer'>
    <h1>Thanks To Visit our Website<h1> 
    </div>
    
    <br />
</body>

</html>