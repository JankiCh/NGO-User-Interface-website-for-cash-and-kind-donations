<?php
session_start();
include_once 'database.php';
extract($_POST);

if(isset($_POST['post']))
{	 
    $email=$_SESSION["email_id"];
    $name=$_SESSION["name"];
    $title = test_input($_POST['title']);
    $brief = test_input($_POST['brief']);
    $who=test_input($_POST['who']);
    $item = $_POST['cate'];
    $im="";  
    foreach($item as $im1)  
       {  
          $im.= $im1.",";  
       }  

	
	$sql = "INSERT INTO ngo_requirements (email,name,title,brief,who,items)
	VALUES ('$email','$name','$title','$brief','$who','$im')";

	if (mysqli_query($conn, $sql)) {
		header("Location: ngohome.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	 mysqli_close($conn);

}
?>