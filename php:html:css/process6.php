<?php
session_start();
include_once 'database.php';
if(isset($_POST['change']))
{	 

	$email=$_SESSION['email_id'];
	$old_pass =($_POST['old_pass']);
	$new_pass =($_POST['new_pass']);

	$pass=mysqli_query($conn,"select password from ngoo where email_id='$email' and password='$old_pass'");
	$row_pass = mysqli_fetch_array($pass);

	if (mysqli_num_rows($pass)>0)
	{
		if($old_pass==$row_pass['password']){
			$sql = "UPDATE ngoo set password='$new_pass' where email_id='$email'";
			if (mysqli_query($conn, $sql)) {
				header("Location: changepass2.php?status=200");
				exit();
			}
		}
	}
	else{
		header("Location: changepass2.php?status=201");
		exit();
	}
	mysqli_close($conn);
}
?>