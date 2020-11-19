<?php
$url='localhost';
$username='root';
$password='';
$dbname = "ngo";
$conn=mysqli_connect($url,$username,$password,"$dbname");

if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>