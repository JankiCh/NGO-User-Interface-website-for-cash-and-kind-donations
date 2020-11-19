<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	$name = test_input($_POST['name']);
	$email_id = test_input($_POST['email_id']);
    $phone=test_input($_POST['phone']);
	$city = test_input($_POST['city']);
	$role=test_input($_POST['role']);
	$address = test_input($_POST['address']);
	$dets = test_input($_POST['dets']);
	$password="no_password";
	
    $duplicate=mysqli_query($conn,"select * from ngoo where email_id='$email_id' or phone='$phone'");
	if (mysqli_num_rows($duplicate)>0)
	{
		header("Location: signup3.php?status=201");
		exit();
	}
	

	$sql = "INSERT INTO ngoo (name,email_id,phone,password,city,role,address,descr)
	VALUES ('$name','$email_id','$phone','$password','$city','$role','$address','$dets')";

	if (mysqli_query($conn, $sql)) 
	{
		    $to_email = "bethechange2110@gmail.com";
			$subject = "New NGO Registration";
			$body="Please check the details below:\n
			Name:'$name'\n
			Email:'$email_id'\n
			Phone:'$phone'\n
			City:'$city'\n
			Address:'$address'\n
			Serve:'$role'\n
			Details:'$dets\n'";
			$headers = 'From:bethechance2110@gmail.com'."\r\n";

			if (mail($to_email, $subject, $body, $headers)) {
				header("Location: confirmationpage.php");
			} 
	} 
	else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	 mysqli_close($conn);

}
?>