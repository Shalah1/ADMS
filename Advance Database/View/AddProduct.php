<?php 
include("../Controller/ProductController.php");
include("ManagerNav.php");
?>

<html>
    <head>
    <link rel="stylesheet" href="../CSS/design3.css">
    <link rel="stylesheet" type="text/css" href="CSS/navbar.css">
    <style>
   
        fieldset{
         width:50%;
        }
        </style>
    </head>
    <body>
    <form method="post" enctype="multipart/form-data">  
        <center>                     
         <fieldset> 
            <h3>Add New Prodact</h3><br><br>  

                     <label>Product Name</label>  
                     <input type="text" name="name" class="form-control" /><br><br>  

                     <label>Flavour</label>
                     <input type="text" name = "flavour" class="form-control" /><br><br>

                     <label>Price</label>
                     <input type="text" name = "price" class="form-control" /><br><br>

                     
                     <br> <label for="file ">Upload Picture : </label> 
                        <input type="file" name="fileupload"><br><br>
                     
                     <input type="submit" name="submit" value="Add Product" style="font-size:20px;" /><br>  
                     </fieldset> 
                     </table>                    
                     <?php  
                        echo $Err; 
                     ?>  
                     </fieldset>
                     </center>

                </form>  
    </body>
</html>