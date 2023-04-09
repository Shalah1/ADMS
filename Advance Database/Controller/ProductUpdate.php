<?php  

 $message = '';  
 $Err = '';  
 if(isset($_POST["submit"]))  
 {  

        $Name=$_REQUEST["name"];
        $Price=$_REQUEST["price"];
        $Flavour=$_REQUEST["flavour"];

        if($Name ==null || $Price==null || $Flavour==null){
            $Err="All Fields are required to fill up";
        }
      else  
      {  
        
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->UpdateProduct($conobj,$_SESSION["P_ID"], $Name,$Price,$Flavour);
        if(isset($_SESSION["up"])){

            header("location: ../View/ALLProducts.php");
          }
        
        else{
            echo "Failed";
        }
       

      }  
 }  
 ?>