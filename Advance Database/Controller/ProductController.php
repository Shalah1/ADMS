<?php  
include("../Model/DB.php");
 $message = '';  
 $Err = '';  
 if(isset($_POST["submit"]))  
 {  

        $Name=$_REQUEST["name"];
        $Price=$_REQUEST["price"];
        $Flavour=$_REQUEST["flavour"];

        if($Name ==null ||  $Price==null || $Flavour==null){
            $Err="All Fields are required to fill up";
        }
      else  
      {  
        $target_File="../File/".$_FILES["fileupload"]["name"];
        if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
        {
            echo "You have uploadede a new file";
        }
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery= $connection->AddIceCream($conobj,$Name,$Price,$Flavour,$target_File);
      
        if($userQuery==true){
            header("location: ManagerDashboard.php");
        }
       //$connection->CloseCon($conobj);
      }  
 }  
 ?>
