<?php 
include("../Model/DB.php");
include("ManagerNav.php");
?>

<html>
    <head>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
    </head>
    <body>
    <div class = 'header sticky'> 
<link rel="stylesheet" type="text/css" href="../CSS/Design3.css">
<h1 font color='white'> Ice-Cream Shop Management System </h1> 
</div>
<br>
<center><h2>Customer List</h2></center>
    <table >
        <tr>
        <th> ID </th>
        <th>Name</th>
        <th>Username</th>
        <th>Address</th>
        <th>Phone</th>
       

        </tr>
<?php 
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$result=$connection->CustomerList($conobj);  



// $num_row = oci_fetch_all($result, $both);

    while( ($row = oci_fetch_row($result)) != false) {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[3]."</td>";
        echo "<td>".$row[4]."</td>";

        echo "</tr>";


    }
   



   

?>




    </table>




    </body>
    </html>