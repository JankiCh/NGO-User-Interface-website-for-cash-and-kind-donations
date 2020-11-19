<?php
include_once 'database.php';
$sql = "DELETE FROM ngo_requirements WHERE title='" . $_GET["title"] . "'";
if (mysqli_query($conn, $sql)) {
    header("Location:ngohome.php");
} 
mysqli_close($conn);
?>