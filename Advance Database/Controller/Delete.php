<?php
require("../Model/Db.php");
        $id=$_REQUEST["id"];

        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $result=$connection->DeleteProduct($conobj,$id);

        if(isset($_SESSION["delete"])){

            header("location: ../View/ALLProducts.php");
          }
        
        else{
            echo "Failed";
        }
       
        
 

?>