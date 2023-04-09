<?php

require("../Model/Db.php");
$Success="";
        $id=$_REQUEST["id"];

        $date=date("Y-m-d");
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $getIceCream=$connection->GetOrderDetail($conobj,$id);
        $result=$connection->BILL($conobj,$date,$_SESSION["Ice_Cream_Price"],$_SESSION["WName"],$id,$_SESSION["Ice_Cream_Name"],$_SESSION["Ice_Cream_Flavour"]);

        if(isset($_SESSION["bill"])){
          $Success="Bill Generated Successfull....";

          header("location: ../View/GenerateBill.php?msg='$Success'");
       
          }
        
        else{
         
        $output = getdbmsoutput($c); 
        foreach ($output as $line)
        echo "$line"; 
        echo "Failed";
        }
       
        
 

?>