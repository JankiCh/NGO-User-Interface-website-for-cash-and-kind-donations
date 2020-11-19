<?php
session_start();
include("database.php");
extract($_POST);
if(isset($signin))
{
	$pass=md5($pass);
	$check=mysqli_query($conn,"select * from donor where email_id='$email_id' and password='$pass'");
	$row = mysqli_fetch_array($check);
	if(mysqli_num_rows($check)>0)
	{
		$_SESSION["email_id"]=$email_id;
		$_SESSION["user_id"]=$row['user_id'];
		$_SESSION["name"]=$row['name'];
	}
	else
	{
		$message="Invalid Credentials !";
		
	}
}




if (isset($_SESSION["user_id"]))
{
	header("Location:donorhome.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login for Donor</title>
    <script src="https://use.fontawesome.com/e7086e0bc7.js"></script>
    
    <style>
        .signin-content{
            margin:5% auto 5% auto;
            width: 68%;
            height:auto;
            padding:20px 20px 15px 25px;
            background-color: white;
            box-shadow: 6px 6px #eeceda;
            border-radius: 1%;   
        }
        .signin-form{
            display: inline-block;
            width: 40%;
        }
        .img-content{
            display: inline-block;
            width: 50%; 
        }
        img{
            float: left;
            width: 400px;
            height: 500px;
        }
        body{
            background-color: #f7f2e7;
            font-family:'Ubuntu', sans-serif; 
        }  
        .ic{
            color: #5c0a29;
            font-size: 18px;
        }
        
        input[type="email"],input[type="password"],input[type="text"]{
            border:0;
            outline: none;
            background: none;
            color: black;
            font-size: 15px;
        }
        .form-group{
                margin-bottom: 25px;
        }
        .goback{
            padding: 18px;
            font-size: 20px;
            color: #5c0a29;
        }
        .foot{
            font-size: 17px;
            color:#5c0a29;
            text-align: center;
            font-weight:lighter;
        }
        .footlink{
            text-decoration: none;
            color:#5c0a29;
            font-weight:lighter;
        }
        .arrow{
            text-decoration: none;
            color:#5c0a29;
        }
        p{
            margin:12px;
        }
        .btn{
            border-radius:5px;
            border: 0;
            background-color: #eeceda;
            box-shadow: 0;
            padding: 8px;
            color: #5c0a29;
            font-size: 15px;
            
        }
        a{
            text-decoration:none;
        }
             
    </style>
    
</head>

<body>            
     
    <div class="bor goback">
        <a href="commonhome.php" class="arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <span>Go to Dashbord</span>
    </div>

    <div class="signin-content">
        <div class="img-content">
            <img src="images/img3.png" alt="">
        </div> 

        <div class="signin-form">
            
            <h2 class="form-title">Login</h2>
            <h4>Welcome!!! Please, fill the details to sign in to your account</h4>
            <?php
            if(count($_GET)>0){
                echo "<span style='color:green;text-align:center;'>Signup Success ! Please Login to Continue.</span>";
            }
            ?>
            <?php
            if(isset($message)){
                echo "<span style='color:red;text-align:center;'>$message</span>";
            }
            ?>
                <form method="POST">
                    <div class="form-group">
                        <i class="ic fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="email_id" id="email_id" placeholder="Email ID"  required />
                        <hr>
                    </div>
    
                    <div class="form-group">
                        <i class="ic fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="pass" id="pass" placeholder="Password" required/><br>
                        <hr>
                        <span><i class="fa fa-eye" id="show_password"></i>Show Password</span>
                    </div>
                     
                    
    
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="btn form-submit" value="Log in"/>
                    </div>
                    <a href="signup2.php" class="btn signup-image-link">Create an account</a>
                   <br><br><br><br><br>
    
                </form>
                
        </div>
        
        
    </div>
    
    <div class="foot">
            <p>&copy;2020 be the change &middot; <a href="privacy.html" class="footlink">Privacy</a> &middot; <a href="terms.html"class="footlink">Terms</a></p>
            <p>Find us on
              <i class="fi fa fa-twitter" aria-hidden="true"></i>
              <i class="fi fa fa-facebook" aria-hidden="true"></i>
              <i class="fi fa fa-instagram" aria-hidden="true"></i>
              <i class="fi fa fa-envelope" aria-hidden="true"></i>
            </p>

    </div>
    

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>   
          

    
</body>
</html>