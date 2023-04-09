<?php
session_start();
class DatabaseConnection{
function OpenCon()
 {
 $db_username = "RUDRO";
 $db_password = "rudro";
 $connection_string="localhost/xe";
 $conn=oci_connect($db_username, $db_password, $connection_string);

    return $conn;
 }

 function ARegistration($con,$name,$username,$phone,$password,$address)
 {

    $c_id=1;
    $query = "SELECT C_ID FROM customer order by C_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;


    $query = "INSERT INTO customer (C_ID,C_NAME,C_USERNAME,C_ADD,C_PHONE,C_PASSWORD) VALUES ($c_id,'$name', '$username', '$address', '$phone', '$password')";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Registration Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }


 function Registration($con,$name,$username,$phone,$password,$address)
 {

    $c_id=1;
    $query = "SELECT C_ID FROM customer order by C_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;

    $query = "BEGIN ADD_CUSTOMER ($c_id,'$name', '$username', '$address', '$phone', '$password'); END;";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Registration Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }


 function AddWaiter($con,$name,$salary,$phone,$password)
 {

    $c_id=1;
    $query = "SELECT W_ID FROM waiter order by W_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;

    
    $query = "BEGIN ADD_WAITER ('$name','$phone','$salary', '$password');END;";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Waiter Added Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }


 function ManagerRegistration($con,$Name,$Phone,$Password)
 {

    $c_id=1;
    $query = "SELECT M_ID FROM Manager order by M_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;


    $query = "INSERT INTO manager (M_ID,M_NAME,M_PHONE,M_PASSWORD,M_APPROVAL) VALUES ($c_id,'$Name','$Phone', '$Password','false')";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Registration Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }

 function AdminRegistration($con,$Name,$Username,$Phone,$Password,$Address)
 {

    $c_id=1;
    $query = "SELECT A_ID FROM admin order by A_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;

   
    $query = "INSERT INTO admin (A_ID,A_NAME,A_USERNAME,A_PHONE,A_PASSWORD,A_ADDRESS) VALUES ($c_id,'$Name','$Username','$Phone', '$Password','$Address')";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Registration Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }

 function AddIceCream($con,$Name,$Price,$Flavour,$target_File)
 {

    $c_id=1;
    $query = "SELECT I_ID FROM IceCream order by I_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;
                                                                            
    
    $query = "BEGIN ADD_ICECREAM ($c_id,'$Name',$Price,'$Flavour','$target_File');END;";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        echo "Product Added  Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }

 function BILL($con,$date,$amount,$waiter,$oid,$icecream,$flavour)
 {

    $c_id=1;
    $query = "SELECT B_ID FROM BILL order by B_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;
                                                                            
    $s = oci_parse($c, "begin mybt(); end;");
    $query = "BEGIN ADD_BILL ($c_id,'$date','$amount','$waiter',$oid,'$icecream','$flavour');END;";
    $result = oci_parse($con, $query);
    oci_execute($result,$s);

    
    if($result)
    {
        $_SESSION["bill"]=true;
        $query2="delete from icecreamorder where O_ID=$oid";
        $result2 = oci_parse($con, $query2);
        oci_execute($result2);
       
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }


 function Order($con,$id,$Name,$Price,$Flavour,$Waiter)
 {

    $c_id=1;
    $query = "SELECT O_ID FROM IceCreamOrder order by O_ID desc";
    $result = oci_parse($con, $query);
    oci_execute($result);
    $num_row = oci_num_rows($result);
    $row = oci_fetch_array($result, OCI_BOTH);
                $id = $row[0];
                $c_id = $id + 1;
                                                                            

    $query = "BEGIN ADD_ORDER ($c_id,'$Name','$Price','$Flavour','$Waiter');END;";
    $result = oci_parse($con, $query);
    oci_execute($result);
    
    if($result)
    {
        $_SESSION["ord"]=true;
        echo "Product Order  Successfull";
    }
    else 
    {
        echo "There is a problem";
    }
    return $result;
  
 }


 function Login($conn,$Username,$password)
 {
    $query ="SELECT * FROM  customer WHERE C_USERNAME like '$Username' AND C_PASSWORD like '$password' ";

    $result = oci_parse($conn, $query);
    oci_execute($result);
    $row = oci_fetch_all($result, $both);
        if ($row)
        {
            $_SESSION["Username"]=$Username;
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}


function WaiterLogin($conn,$phone,$password)
{
   $query ="SELECT * FROM  waiter WHERE W_PHONE like '$phone' AND W_PASSWORD like '$password' ";
   $result = oci_parse($conn, $query);
   oci_execute($result);
   $row = oci_fetch_all($result, $both);
       if ($row)
       {
        $name="";
        $query2 ="select * from waiter where W_Phone like '$phone'";
     
        $result2 = oci_parse($conn, $query);
        oci_execute($result2);
        $num_row2 = oci_num_rows($result2);
        $row2 = oci_fetch_array($result2, OCI_BOTH);
                    $name = $row2[1];
           $_SESSION["Phone"]=$phone;
           $_SESSION["WName"]=$name;
           echo "Login Successful <br>";
       }
       else {
       echo "Login Failed !<br>";
       }
   return $result;
}

function AdminLogin($conn,$Username,$password)
{
   $query ="SELECT * FROM  admin WHERE A_USERNAME like '$Username' AND A_PASSWORD like '$password' ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   $row = oci_fetch_all($result, $both);
       if ($row)
       {
           $_SESSION["Username"]=$Username;
           echo "Login Successful <br>";
       }
       else {
       echo "Login Failed !<br>";
       }
   return $result;
}

function ApproveManager($conn,$id)
{

   $query ="update manager set M_APPROVAL='true' where M_ID like '$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
 
   if(oci_num_rows ($result)> 0)  
   {  
    $_SESSION["check"]="true";
   return true;
   }

   return false;
}

function UpdateManager($conn,$Name,$Password,$Phone)
{

   $query ="update manager set M_NAME='$Name' , M_PASSWORD='$Password' where M_PHONE like '$Phone'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
 
   if(oci_num_rows ($result)> 0)  
   {  
    $_SESSION["update"]="true";
   return true;
   }

   return false;
}

function UpdateProduct($conn,$id, $Name,$Price,$Flavour)
{

   $query ="update icecream set I_NAME='$Name' , I_Flavour='$Flavour',I_Price='$Price' where I_ID like '$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
 
   if(oci_num_rows ($result)> 0)  
   {  
    $_SESSION["up"]="true";
   return true;
   }

   return false;
}


 
function RejectManager($conn,$id)
{

   $query ="delete from manager where M_ID like '$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
 
   if(oci_num_rows ($result)> 0)  
   {  
    $_SESSION["delete"]="true";
   return true;
   }

   return false;
}


function DeleteProduct($conn,$id)
{

   $query ="delete from icecream where I_ID like '$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
 
   if(oci_num_rows ($result)> 0)  
   {  
    $_SESSION["delete"]="true";
   return true;
   }

   return false;
}


function ManagerList($conn)
{

   $query ="select * from manager ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function ShowAllBills($conn)
{

   $query ="select * from BILL ";
   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
   
}

function SearchProduct($conn,$PName)
{


   $query ="select * from ICECREAM where LOWER (I_NAME) like  LOWER ('%$PName%')";
   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function ShowOrderProduct($conn)
{

   $query ="select * from ICECREAM ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function ShowAllOrder($conn)
{

   $query ="select * from ICECREAMORDER ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function GetOrderDetail($conn,$id)
{

   $query ="select * from ICECREAMORDER where O_ID='$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);

   $num_row = oci_num_rows($result);
   $row = oci_fetch_array($result, OCI_BOTH);

            $_SESSION["Ice_Cream_Name"]=$row[1];
            $_SESSION["Ice_Cream_Flavour"]=$row[3];
            $_SESSION["Ice_Cream_Price"]=$row[2];                                                               
   return $result;
}



function GetIceCream($conn,$id)
{

   $query ="select * from ICECREAM where I_ID='$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);

   $num_row = oci_num_rows($result);
   $row = oci_fetch_array($result, OCI_BOTH);

            $_SESSION["Ice_Cream_Name"]=$row[1];
            $_SESSION["Ice_Cream_Flavour"]=$row[3];
            $_SESSION["Ice_Cream_Price"]=$row[2];                                                               
   return $result;
}


function ShowAllProduct($conn)
{

   $query ="select * from icecream ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}


function ShowProduct($conn,$id)
{

   $query ="select * from icecream where I_ID like '$id'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}
 
function CustomerList($conn)
{

   $query ="select * from customer ";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function ManagerLogin($conn,$phone,$password)
{
   $query ="SELECT * FROM  manager WHERE M_PHONE like '$phone' AND M_PASSWORD like '$password' AND M_APPROVAL like 'true'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   $row = oci_fetch_all($result, $both);
       if ($row)
       {
           $_SESSION["Phone"]=$phone;
           echo "Login Successful <br>";
       }
       else {
       echo "Login Failed !<br>";
       }
   return $result;
}

function ManagerData($conn,$Phone)
{
   $query ="SELECT * FROM  manager WHERE  M_PHONE like '$Phone'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

function PendingManager($conn)
{
   $query ="SELECT * FROM  manager WHERE  M_APPROVAL like 'false'";

   $result = oci_parse($conn, $query);
   oci_execute($result);
   return $result;
}

 

function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Username='". $User."'");
    return $result;
}

function ShowData2($conn,$table,$Email)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email like '%".$Email."%' ");
    return $result;
}
//



 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
return $result;
 }






 function UpdatePassword($conn,$table,$Phone,$Password)
 {
    $result1 = $conn->query("SELECT * FROM  $table Where Phone='$Phone'");
    $result=false;
    if ($result1->num_rows > 0)
    {
        $sql = "UPDATE $table SET Password='$Password' WHERE Phone='$Phone'";
        if ($conn->query($sql) === TRUE) {
          
           $result= TRUE;
       } 
       else {
           $result= FALSE;
           
       }
    }

     
    return  $result;
 }
 


function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>