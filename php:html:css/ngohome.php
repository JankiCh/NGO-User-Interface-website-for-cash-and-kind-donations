<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>NGO Home</title>

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
        .c{
          padding-right:20px;
          padding-left:20px;
          padding-bottom:20px;
          
          
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="cssngo.css" rel="stylesheet">
    
  </head>
  <body>
    <div id="top">
        <header>
          <div id="mainh">
            <img src="images/logo2.png" id="pic" >
            <h1 id="title">Be The Change</h1>
          </div>
          <div id="log">
            <?php
              if(isset($_SESSION["name"]))
              {
                  echo $_SESSION["name"]."<span></span>";
                  echo "<a href='logout.php' class='btn xyz'>Logout</a><br>";
              }
              
          ?>
          </div>
        </header>
        <div style="clear: both;"></div>
        <hr>
        <div class="sect">
          <div id="nav">
            <nav id="navi">
              <ul id="navli" >
                <li><a href="commonhome.php"><button class="btn"><i class="fa fa-home"></i> Home</button></a></li>
                <li><a href="contact3.html"><button class="btn"><i class="fa fa-comments"></i> Contact Us</button></a></li>     
              </ul>
            </nav>
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
      <div style="clear: both;"></div>
        <div id="bannerimg">
          <div id="bande">
            <a href=""><img src="images/ngo1.jpg" id="banim" alt="Banner image" width="100%" class="bot"></a>
                       <img class="top" id= "banim2" src="images/ngo2.jpg" alt="Banner image 2" width="100%" />
                       <p id="quote">"Help create a lifestyle for them, like you want for you"</p>
          </div>
        </div>
      </div>
      <div class="c">
          
          <p> We at BE THE CHANGE strongly believe in giving back to the society. This is an interface, an interface to connect the needy to the blessed ones. We here give you an easy access to donate to any nation-wide NGOs at one click on one platform, sitting in the comforts of your home.</p>

          <p>Heyyy!!! Great Job. Now that you have been verified you can explore our website. To post up a requirement for a cause, you’ll see a “POSTS” tab on the top. Once you click on that, you will the requirements you have already posted and will also get an option to delete them. By clicking on delete button on their right, you can delete them. You can also post more by clicking on “post”. You’ll see it listed once you refresh the page.
         </p>

          <h3>We expect you to keep your hearts open and contribute on making this world a better place, as much as you can.</h3>

          <h2>Happy Donating!</h2>

      
        </div>
        <hr>
        <footer class="container">
          <p class="float-right" id="back"><a href="#" id="back1">Back to top</a></p>
          <p id="bot">&copy;2020 webname &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> </p>
          
          <p id="find">Find us on
            <i class=" fi fa fa-twitter" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-facebook" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-instagram" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-envelope" aria-hidden="true" id="socmed"></i>
          </p>
        </footer>
  </body>
  </html>