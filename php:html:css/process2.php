<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	$name = test_input($_POST['name']);
	$email_id = test_input($_POST['email_id']);
    $phone=test_input($_POST['phone']);
    $gender = test_input($_POST['gender']);
	$occupation=test_input($_POST['occupation']);
	$password = md5($_POST['password']);
    
    $duplicate=mysqli_query($conn,"select * from donor where email_id='$email_id' or phone='$phone'");
	if (mysqli_num_rows($duplicate)>0)
	{
		header("Location: signup2.php?status=201");
		exit();
	}
	
	$sql = "INSERT INTO donor (name,email_id,phone,password,gender,occupation)
	VALUES ('$name','$email_id','$phone','$password','$gender','$occupation')";
	if (mysqli_query($conn, $sql)) {
		header("Location: index2.php?status=200");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	 mysqli_close($conn);
}
?>