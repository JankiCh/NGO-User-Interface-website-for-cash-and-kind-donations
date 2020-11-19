<?php
session_start();
include_once 'database.php';
if(isset($_POST['change']))
{	 

	$email=$_SESSION['email_id'];
	$old_pass = md5($_POST['old_pass']);
	$new_pass = md5($_POST['new_pass']);

	$pass=mysqli_query($conn,"select password from donor where email_id='$email' and password='$old_pass'");
	$row_pass = mysqli_fetch_array($pass);

	if (mysqli_num_rows($pass)>0)
	{
		if($old_pass==$row_pass['password']){
			$sql = "UPDATE donor set password='$new_pass' where email_id='$email'";
			if (mysqli_query($conn, $sql)) {
				header("Location: changepass.php?status=200");
				exit();
			}
		}
	}
	else{
		header("Location: changepass.php?status=201");
		exit();
	}
	mysqli_close($conn);
}
?>