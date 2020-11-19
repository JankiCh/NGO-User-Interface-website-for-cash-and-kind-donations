<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Post</title>
    <script src="https://use.fontawesome.com/e7086e0bc7.js"></script>
    <style>
        .post-content{
            margin:5% auto 5% auto;
            width: 68%;
            height:auto;
            padding:20px 20px 15px 25px;
            background-color: white;
            box-shadow: 6px 6px #eeceda;
            border-radius: 1%;   
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
        input[type="text"],input[type="email"],input[type="password"],option,input[type="tel"]{
            border:0;
            outline: none;
            background: none;
            color: black;
            font-size: 15px;
            display:inline-block;
            width:80%;
        }
        textarea{
            border:0;
            outline: none;
            background: none;
            color: black;
            font-size: 15px;
            display:inline-block;
            width:100%;
        }
        .hr{
            width: 60%;
        }
        label{
            display: inline-block;
            width: 250px;
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
        <div class="bor goback">
                <a href="ngohome.php" class="arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                <span>Go to Dashboard</span>
        </div>

        <div class="post-content">
            

                <h4 class="form-title">Post your requirements</h4>
                
                <form method="POST" class="register-form" id="register-form" action="process4.php">
                    
                    <div class="form-group">
                        <i class="ic fa fa-pencil-square-o" aria-hidden="true"></i>
                        <input type="text" name="title" id="title" placeholder="Title" required />
                        <hr>
                        <span id="error_title" style="color:red;"></span>
                    </div>


                    <div class="form-group">
                        <i class="ic fa fa-sticky-note-o" aria-hidden="true"></i>
                        <textarea name="brief" id="brief" cols="105" rows="4" placeholder="Describe your requirements" required></textarea><br>
                        <hr>
                    </div>
                    

                    <div class="form-group">
                        <i class="ic fa fa-users" aria-hidden="true"></i>
                        <label for="">Who is this stuff for?</label>
                        <select name="who">
                        <option value="animals">ANIMALS</option>
                        <option value="community development">COMMUNITY DEVELOPMENT</option>
                        <option value="disabled">DISABLED</option>
                        <option value="elderly">ELDERLY</option>
                        <option value="underpriviledged_children">UNDERPRIVILEDGED CHILDREN</option>
                        <option value="women enpowerment">WOMEN ENPOWERMENT</option>
                        <option value="other">OTHER</option>
                        </select>
                        <span id="error_who" style="color:red;"></span>
                    </div>
                    <br>

                    <div class="form-group">
                        <i class="ic fa fa-list" aria-hidden="true"></i>   
                        <label>Items:</label> <br>
                        <label for="">Clothing and shoes:</label>
                        <input type="checkbox" name="cate[]" value=" Clothing and shoes"><br>
                        <label for="">Food:</label>
                        <input type="checkbox" name="cate[]" value="Food"><br>
                        <label for="">Food(for animals):</label>
                        <input type="checkbox" name="cate[]" value="Food(for animals)"><br>
                        <label for="">Hygiene essentials:</label>
                        <input type="checkbox" name="cate[]" value="Hygiene essentials "><br>
                        <label for="">Kitchenware:</label>
                        <input type="checkbox" name="cate[]" value="Kitchenware"><br>
                        <label for="">Medicines:</label>
                        <input type="checkbox" name="cate[]" value="Medicines"><br>
                        <label for="">Medicines(for animals):</label>
                        <input type="checkbox" name="cate[]" value="Medicines(for animals)"><br>
                        <label for="">Seeds and gardening equipments:</label>
                        <input type="checkbox" name="cate[]" value="Seeds and gardening equipments"><br>
                        <label for="">Stationery:</label>
                        <input type="checkbox" name="cate[]" value="Stationery"><br>
                        <label for="">Toys:</label>
                        <input type="checkbox" name="cate[]" value="Toys"><br>
                    </div>
            
                    
                    <div class="form-group form-button">
                        <input type="submit" name="post" id="post" class="btn form-submit" value="Post"/>
                    </div>


                </form>
           


             
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
        <script src="js/main.js"></script>   
   
            
	
</body>
</html>