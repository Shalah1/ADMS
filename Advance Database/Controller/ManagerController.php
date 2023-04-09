<?php
	include "../Model/Manager.php";
	if(isset($_POST['id']) && isset($_POST['password']))
	{
		if($_POST['id'] != "" && $_POST['password'] != "" && is_numeric($_POST['id']))
		{
			$id = $_POST['id'];
			$password = $_POST['password'];
			$isValid = checkValidLogin($id, $password);
			if($isValid)
			{
				session_start();
				$_SESSION['m_id'] = $id;
				header('Location: ../View/ManagerDashboard.php');
			}
			else
			{
				echo "sad";
			}
		}
		else
		{
			header('Location: ../View/ManagerLogin.php?error=invalid');
		}
	}
	else
	{
		header('Location: ../View/ManagerLogin.php?error=invalid');
	}
?>