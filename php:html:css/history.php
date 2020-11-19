<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Listings</title>

    <style>

      body{
            font-family: Arial, Helvetica, sans-serif;

        } 
      .sl{
          text-decoration:none;
      }
      .fo{
        color:white;
      }
      #pic{
            float: left;
            height: 90px;
            width: 90px;
            margin-left: 20px;
            border: none;
            
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
              <li><a href="ngohome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a></li>
              <li><a href="contact3.html"><button class="btn"><i class="fa fa-comments"></i> Contact Us</button></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="dropdown">
          <button class="dropbtn fa fa-bars navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <div class="dropdown-content">
            <a href="history.php"><i class="fa fa-address-card">Listings</i></a>
            <a href="changepass2.php"><i class="fa fa-address-book"></i>Change Password</a>
            <a href="faq3.html"><i class="fa fa-bar-chart"></i>FAQs</a>
          </div>
        </div>
  </div>
  
  <h3 align="center">List of things that might make someone's day!</h3>
  <p align="center"><a href="post.php" class="btn sl">POST</a></p>
    <div class="table table-striped">

<?php
include("database.php");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_SESSION['name'];
$sql = "SELECT * FROM ngo_requirements where name='$name'";
$result = $conn->query($sql);
?>

<table>
	<tr>
	
	<td>Title</td>
	<td>Items</td>
	<td>What NGO says</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>

	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["title"]; ?></td>
	<td><?php echo $row["items"]; ?></td>
	<td><?php echo $row["brief"]; ?></td>
	<td><a class="btn sl" href="delete-process.php? title=<?php echo $row["title"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
 ?>
</table>


<footer class="container">
          <p class="float-right" id="back"><a href="#" id="back1">Back to top</a></p>
          <p id="bot">&copy;2020 be the change &middot; <a href="privacy.php">Privacy</a> &middot; <a href="terms.html">Terms</a></p>
          
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