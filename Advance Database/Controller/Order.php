<?php

require("../Model/Db.php");
$Success="";
        $id=$_REQUEST["id"];


        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $getIceCream=$connection->GetIceCream($conobj,$id);
        $result=$connection->Order($conobj,$id,$_SESSION["Ice_Cream_Name"],$_SESSION["Ice_Cream_Price"],$_SESSION["Ice_Cream_Flavour"],$_SESSION["WName"]);

        if(isset($_SESSION["ord"])){
          $Success="Ice-Cream Order Successfull....";

          header("location: ../View/IceCreamList.php?msg='$Success'");
       
          }
        
        else{
            echo "Failed";
        }
       
        
 

?>