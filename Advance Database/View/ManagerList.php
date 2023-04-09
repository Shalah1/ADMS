<?php 
include("../Model/DB.php");
include("AdminNav.php");
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
    <table >
        <tr>
        <th> ID </th>
        <th>Name</th>
        <th>Phone</th>
        <th>Status</th>

        </tr>
<?php 
$connection=new DatabaseConnection();
$conobj=$connection->OpenCon();
$result=$connection->ManagerList($conobj);  



// $num_row = oci_fetch_all($result, $both);

    while( ($row = oci_fetch_row($result)) != false) {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo "<td>".$row[2]."</td>";
        echo "<td>".$row[4]."</td>";

        echo "</tr>";


    }
   



   

?>




    </table>




    </body>
    </html>