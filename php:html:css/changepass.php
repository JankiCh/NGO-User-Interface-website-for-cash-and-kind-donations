<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Change Password(Donor)</title>
    <script src="https://use.fontawesome.com/e7086e0bc7.js"></script>
    <style>
        .change-content{
            margin:5% auto 5% auto;
            width: 68%;
            height:auto;
            padding:20px 20px 15px 25px;
            background-color: white;
            box-shadow: 6px 6px #eeceda;
            border-radius: 1%;   
        }
        .change-form{
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
        .btn{
            border-radius:5px;
            border: 0;
            background-color: #eeceda;
            box-shadow: 0;
            padding: 8px;
            color: #5c0a29;
            font-size: 15px;
            
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
        .fi{
            margin:7px;
        }
           
             
             
    </style>
</head>

<body>            
    <div class="change-content">               
        <div class="img-content">
         <img src="images/img6.png" alt="">   
        </div>

        <div class="change-form">
            <h2 class="form-title">Change Password</h2>
            <?php
            if(count($_GET)>0){
                if($_GET['status']==200){
                    echo "<span style='color:green;text-align:center;'>Password changed successfully !</span>";
                }
                if($_GET['status']==201){
                    echo "<span style='color:red;text-align:center;'>Invalid Old password  !</span>";
                }
            }
            ?>
                <form method="POST" action="process5.php">

                    <div class="form-group">
                        <i class="ic fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="old_pass" id="old_pass" placeholder="Old Password" required/><br>
                        <hr>
                    </div>
                    

                    <div class="form-group">
                        <i class="ic fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="new_pass" id="new_pass" placeholder="New Password" required/><br>
                        <hr>    
                        <span><i class="fa fa-eye" id="show_password"></i>Show Password</span>
                    </div>
                    
                    <div class="form-group form-button">
                        <input type="submit" name="change" id="change" class="btn form-submit" value="Change"/>
                    </div>

                </form>
                <br><br><br><br><br>
    
            
        
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
    <script src="js/main1.js"></script>   
       

    
</body>
</html>