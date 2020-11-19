<!DOCTYPE html>
<html>
<head>
  <title>Confirmation</title>
  <style type="text/css">
    body{
      background: #f7f2e7;
    }
    a{
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
<?php
$num= $_POST['num'];
$to_email = "bethechange2110@gmail.com";
$subject = "Query request";
$body = "Hello admin, please contact $num.";
$headers = "From:bethechange2110@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Information sent successfully.";
} else {
    echo "Information sending failed...";
}
?>
<p><a href="commonhome.php"><b>Go to Dashboard<b></a></p>
</body>
</html>