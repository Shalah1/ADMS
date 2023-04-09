<?php

include("../Model/DB.php");
include("../Controller/ProductUpdate.php");
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>contact</title>
           <style>
            fieldset{
                margin-left:130%;
                width: 130%;
            }
           </style>
    <link rel="stylesheet" href="CSS/design2.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">

      </head>  
      
<?php include "ManagerNav.php"; 
?>
<div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design3.css">
<h1 font color='white'> Ice-Cream Shop Management Systems </h1> 
</div>
<br>
<center><h2>Update Products Information</h2></center>
<?php

$id=$_REQUEST["id"];
$_SESSION["P_ID"]=$id;

$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$result=$connection->ShowProduct($conobj,$id);

while( ($row = oci_fetch_row($result)) != false) {

   
?>

<br>
      <body>  
           <br />  


            <div class="container" style="width:500px;">  
                <h3 style="text-align:center" >
                 
                 
            
                         
                <form method="post" enctype="multipart/form-data">  
                     <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?>  
                       <center>
                <fieldset> 
                     <br />  
                     <label>Product Name</label>  
                     <input type="text" name="name" class="form-control" value="<?php echo $row[1]; ?>" ><br />  


                     <label>Flavour</label>
                     <input type="text" name = "flavour" class="form-control" value="<?php echo $row[3]; ?>"><br />
                     
                     <label>Price</label>
                     <input type="text" name = "price" class="form-control" value="<?php echo $row[2]; ?>"><br />
               
                     
                     <input type="submit" name="submit" value="Update Product" style="font-size:20px;" /><br>  
        
                     </table>                    
                     <?php  
                      }
                        echo $Err; 
                     ?>  
                     </fieldset>
                     </center> 
                </form>  
           </div>  

        </div> 
    </div>
           <br />  
      </body>  
 </html>