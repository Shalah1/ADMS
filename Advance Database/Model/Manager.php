<?php

	function dbConnect()
	{
		$db_username = "RUDRO";
		$db_password = "rudro";
		$connection_string="localhost/xe";
		$connection=oci_connect($db_username, $db_password, $connection_string);
		if($connection)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function checkValidLogin($id, $password)
	{
		$db_username = "RUDRO";
		$db_password = "rudro";
		$connection_string="localhost/xe";
		$connection=oci_connect($db_username, $db_password, $connection_string);

		if($connection)
		{
			// $query = "SELECT * FROM MANAGER WHERE M_ID = '$id' AND M_PASSWORD = '$password'";
			// $result = oci_parse($connection, $query);
			// oci_execute($result);
			// $row = oci_fetch_array($result, OCI_BOTH);
			// $num_rows = oci_num_rows($result);
			// if($num_rows == 1)
			// {
			// 	return true;
			// }
			// else
			// {
			// 	return false;
			// }

			$sql = "BEGIN 
					IF MANAGER_LOGIN(:id, :password)
					THEN 
						:r := 0;
					ELSE 
						:r := 1;
					END IF; 
					END;";

			$s= oci_parse($connection, $sql);
			oci_bind_by_name($s, ':r', $r, 40);
			oci_bind_by_name($s, ':id', $id);
			oci_bind_by_name($s, ':password', $password);
			oci_execute($s);

			if($r == 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	function getAllWaiters()
	{
		$db_username = "TIAS";
		$db_password = "tiger";
		$connection_string="localhost/xe";
		$connection=oci_connect($db_username, $db_password, $connection_string);
		if($connection)
		{
			$query ="select * from waiter";
   			$result = oci_parse($connection, $query);
		   	oci_execute($result);
		   	return $result;
		}

	}
?>