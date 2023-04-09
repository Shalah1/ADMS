<?php
    $db_username = "RUDRO";
    $db_password = "rudro";
    $connection_string="localhost/xe";
    $connection=oci_connect($db_username, $db_password, $connection_string);

    if(isset($_GET['id']))
    {
        $s = oci_parse($connection, "BEGIN REMOVE_CASHIER(:id); END;");
        oci_bind_by_name($s, ":id", $_GET['id']);
        oci_execute($s);
        oci_close($connection);
        header("Location: ../View/ManageCashier.php");
    }
    else
    {
        header("Location: ../View/ManageCashier.php");
    }
?>