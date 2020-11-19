<?php
session_start();
?>

<?php
$demail=$_SESSION['email_id'];
include_once 'database.php';
$to_email = $_GET["email"];
$subject = "Intrested Donor";
$body="Please connect with the donor\n
The details are given below:
Email:'$demail' ";
$headers = 'From:bethechange2110@gmail.com'."\r\n";

if (mail($to_email, $subject, $body, $headers)) {
    header("Location: confirmpage.html");
} 

?>