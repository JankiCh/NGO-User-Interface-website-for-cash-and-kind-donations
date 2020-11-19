<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Donor List</title>

    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;

        } 

      #pic{
            float: left;
            height: 90px;
            width: 90px;
            margin-left: 20px;
            border: none;
            
        }
        .xyz{
          
          font-family: Arial, Helvetica, sans-serif;
       
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="donlistcss.css" rel="stylesheet">
    
  </head>
  <body>
    <div id="top">
        <header>
          <div id="mainh">
          <img src="images/logo2.png" id="pic" >
            <h1 id="title">Be The Change</h1>
          </div>
          <div id="log">
         
              
                 <a href='logout.php' class='btn xyz'>Logout</a><br>
              
              
          
          </div>
        </header>
        <div style="clear: both;"></div>
        <hr>
        <div class="sect">
        <div id="nav">
          <nav id="navi">
            <ul id="navli" >
              <li><a href="donorhome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a></li>
              <li><a href= "contact2.html"><button class="btn"><i class="fa fa-comments"></i> Contact Us</button></a></li>
              <li><a href="faq2.html"><button class="btn"><i class="fa fa-folder"></i> FAQs</button></a></li> 
            </ul>
          </nav>
        </div>
        <div class="dropdown">
          <button class="dropbtn fa fa-bars navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="dropdown-content">
            <a href="ngolist2.php"><i class="fa fa-address-card"></i> NGO List</a>
            <a href="donlist2.php"><i class="fa fa-address-book"></i> Donor List</a>
            <a href="commonreq2.php"><i class="fa fa-bar-chart"></i> Requirements</a>
            <a href="changepass.php"><i class="fa fa-cog"></i>Change password</a> 
            <a href="helpline2.html"><i class="fa fa-commenting-o"></i> Helplines</a>
          </div>
        </div>
      </div>
  </div>
  <h3 align="center">Donate and be the one to make a change!</h3>
    <div class="table table-striped" id="tab">
<?php
include("database.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// if (mysqli_query($conn, $sql)) {
//     mysqli_close($conn);
//     header('Location: follow_ups.php'); //If book.php is your main page where you list your all records
//     exit;
// } else {
//     echo "Error deleting record";
// }


$sql = "SELECT name,email_id,gender,occupation FROM donor";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table><tr><th >Name</th>
      <th >Email</th>
      <th >Gender</th>
      <th >Occupation</th>
      </tr>";
 while($row = $result->fetch_assoc()){
    echo "<tr>
    <td>" .$row['name']."</td>
        <td>". $row['email_id']."</td>
        <td>". $row['gender']."</td>
        <td>".$row['occupation']."</td>
    </tr>";


}
  echo "</table>";
} else {
  echo "0 results";
}
?>
<footer class="container">
          <p class="float-right" id="back"><a href="#" id="back1">Back to top</a></p>
          <p id="bot">&copy;2020 be the change &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a></p>
          
          <p id="find">Find us on
            <i class=" fi fa fa-twitter" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-facebook" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-instagram" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-envelope" aria-hidden="true" id="socmed"></i>
          </p>
        </footer>
</div>
  </body>
  </html>