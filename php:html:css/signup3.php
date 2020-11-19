<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up(NGO)</title>
    <script src="https://use.fontawesome.com/e7086e0bc7.js"></script>
    <style>
        .signup-content{
            margin:5% auto 5% auto;
            width: 68%;
            height:auto;
            padding:20px 20px 15px 25px;
            background-color: white;
            box-shadow: 6px 6px #eeceda;
            border-radius: 1%;   
        }
        .signup-form{
            display: inline-block;
            width: 45%;
            margin: 15px;
            
        }
        .img-content{
            display: inline-block;
            width: 45%;
            margin-top:10px;
           
        }
        img{
            float: right;
            width: 400px;
            height: 500px;
        }
        body{
            background-color: #f7f2e7;
            font-family:'Ubuntu', sans-serif; 
        }  
        .form-group{
            margin-bottom: 25px;
        }
        .ic{
            color: #5c0a29;
            font-size: 18px;
        }
        .ico{
            color: #5c0a29;
            font-size: 23px;
        }
        input[type="text"],input[type="email"],input[type="password"],input[type="tel"],textarea{
            border:0;
            outline: none;
            background: none;
            color: black;
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
        
        
    </style>
</head>
<body>   
        
   
        <div class="signup-content">
            <div class="signup-form">
                <h2>Register</h2>
                <h4 class="form-title">Fill and we will get back to you</h4>
                <?php
                if(count($_GET)>0){
                echo "<span style='color:red;text-align:center;'>Mobile Number or Email Id already exsit</span>";
                }
                ?>
                <form method="POST" class="register-form" id="register-form" action="process3.php">
                    
                     <div class="form-group">
                        <i class="ic fa fa-building" aria-hidden="true"></i>
                        <input type="text" name="name" id="name" placeholder="Name of NGO" required />
                        <hr>
                        <span id="error_name" style="color:red;"></span>
                    </div>


                    <div class="form-group">
                        <i class="ic fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" name="email_id" id="email_id" placeholder="Email Id" required />
                        <hr>
                    </div>
                    

                    <div class="form-group">
                        <i class="ico fa fa-mobile" aria-hidden="true"></i>
                        <input  name="phone" type="tel" minlength="10" maxlength="10" id="phone" placeholder="Phone"/>
                        <hr>
                        <span id="error_phone" style="color:red;"></span>
                    </div>


                    <div class="form-group">
                        <i class="ico fa fa-map-marker" aria-hidden="true"></i>
                        <input type="text" name="city" id="city" placeholder="City" required />
                        <hr>
                        <span id="error_city" style="color:red;"></span>
                    </div>


                    <div class="form-group">
                        <i class="ic fa fa-users" aria-hidden="true"></i>  
                        <label for="">Who does the NGO help?</label>
                        <select name="role">
                        <option value="animals">ANIMALS</option>
                        <option value="community development">COMMUNITY DEVELOPMENT</option>
                        <option value="disabled">DISABLED</option>
                        <option value="elderly">ELDERLY</option>
                        <option value="underpriviledged_children">UNDERPRIVILEDGED CHILDREN</option>
                        <option value="women enpowerment">WOMEN ENPOWERMENT</option>
                        <option value="other">OTHER</option>
                        </select>
                        <span id="error_role" style="color:red;"></span>
                    </div>

                    <div class="form-group">
                        <i class="fa fa-map-o" aria-hidden="true"></i>
                        <textarea name="address" id="address" cols="48" rows="3" placeholder="Address" required></textarea><br>
                        <hr>
                        <span id="error_address" style="color:red;"></span>
                    </div>
                

                    <div class="form-group">
                        <i class="fa fa-sticky-note-o" aria-hidden="true"></i>
                        <textarea name="dets" id="dets" cols="50" rows="4" placeholder="Can you tell us more about your NGO??" required></textarea><br>
                        <hr>
                        <span id="error_dets" style="color:red;"></span>  
                    </div>

                    
                    
                    <div class="form-group form-button">
                        <input type="submit" name="save" id="signup" class="btn form-submit" value="Register"/>
                    </div>


                </form>
            </div>
            <div class="img-content">
                <img src="images/img7.png" alt="">
            </div>         
        </div>

        <div class="foot">
            <p>&copy;2020 webname &middot; <a href="privacy.html" class="footlink">Privacy</a> &middot; <a href="terms.html"class="footlink">Terms</a></p>
            <p>Find us on
              <i class="fi fa fa-twitter" aria-hidden="true"></i>
              <i class="fi fa fa-facebook" aria-hidden="true"></i>
              <i class="fi fa fa-instagram" aria-hidden="true"></i>
              <i class="fi fa fa-envelope" aria-hidden="true"></i>
            </p>

        </div>

        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main2.js"></script>   
   
            
	
</body>
</html>