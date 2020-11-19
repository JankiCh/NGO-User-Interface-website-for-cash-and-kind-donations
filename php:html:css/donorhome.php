<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Donnor Home</title>

    <style>
      #pic{
            float: left;
            height: 90px;
            width: 90px;
            margin-left: 20px;
            border: none;
            
        }
        body{
            font-family: Arial, Helvetica, sans-serif;

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
              <li><a href="contact2.html"><button class="btn"><i class="fa fa-comments"></i> Contact Us</button></a></li>
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
            <a href="changepass.php"><i class="fa fa-cog"></i>Change Password</a> 
            <a href="helpline2.html"><i class="fa fa-commenting-o"></i> Helplines</a>
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
          <h3>Heyy!!! Now you are all set Donate</h3>
          <h4>As a donor, all you have to do is</h4>
          <ol>
            <li>Surf through our website to know more about what we do.</li>
            <li>If you want to donate, go to requirements, and check the NGOs that need certain essentials.</li>
            <li>	Click on donate button on the right side in the same row to let the Ngo know that you are interested in helping them out.</li>
            <li>	We’ll send a mail to the NGO with your information, and they’ll contact you personally.</li>
            <li>They’ll then arrage the pickup of the items.</li>
          </ol>
          <h4>Easy, no?</h4>

        
          <h3>We expect you to keep your hearts open and contribute on making this world a better place, as much as you can.</h3>

          <h2>Happy Donating!</h2>

      
        </div>
        <hr>
        <footer class="container">
          <p class="float-right" id="back"><a href="#" id="back1">Back to top</a></p>
          <p id="bot">&copy;2020 webname &middot; <a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a></p>
          
          <p id="find">Find us on
            <i class=" fi fa fa-twitter" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-facebook" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-instagram" aria-hidden="true" id="socmed"></i>
            <i class="fi fa fa-envelope" aria-hidden="true" id="socmed"></i>
          </p>
        </footer>
  </body>
  </html>