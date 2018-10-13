<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulance service</title>
    <link  rel="stylesheet" type="text/css" href="styles/primarymedicaladvice1.css"> 
    <link rel="stylesheet" type"text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fontastic.s3.amazonaws.com/qXDGBpBG6AawYwtmYPpQBb/icons.css" rel="stylesheet"/>
    <script src = "Js/primarymedicaladvice1.js"></script>
    
</head> 
<body>
    <header>
        

            
            <ul class="main-nav">    
           <li> <h2 id="name" > &nbsp&nbsp&nbsp CURE PLUS <br> AMBULANCE SERVICE </h2> </li>
        <li style="margin-left: 4.8%;" ><a href="home.php"> HOME </a></li>
        <li class="active"><a href="services.php">  SERVICES</a></li>
        <li><a href="news.php"> NEWS</a></li>
        <li><a href="gallery.php"> GALLERY </a></li>
        <li><a href="faq.php"> FAQ</a></li>
        <li><a href="aboutus.php">ABOUT US </a></li>
        <li><a href="contactus.php"> CONTACT US</a></li>
        <li><a style="color: lightseagreen; " href="login.php"> <b> LOG IN </b> </a></li>
        <li><a style="color: lightseagreen; " href="signup.php"> <b> SIGN UP </b> </a></li>
      
    </ul>  </header> 

        
		
		<div class="row">
		
		
		<div class = "leftcolumn">
		<div class = "items">
				<p>Call 1919 when ever you need our help</p>
		</div>
		</div>		
				
		<div class="rightcolumn">
		<p style = "text-align : center;"><u>Registering for Premium Loyalty Membership</u></p>
				<div class="container"></br>
                    <form name="advice" action="test.php" onsubmit= "return validationForm()" method = "post">
                        
                        <label for = "fname">First Name:</label>
                        <input type = "text" id = "fn" name = "fn"></input><br>

                        <label for = "lname">Last Name:</label>
                        <input type = "text" id = "ln" name = "ln"></input><br>

					    <label for="un">Username:<span>*</span></label>
					    <input type="text" id="un" name="un"></input><br>

					    <label for="password">Password:<span>*</span></label>
					    <input type="password" id="password" name="password" minlength="8"></input><br>
                    
                        <label for ="email">Email Address:<span>*</span></label>
                        <input type = "email" id = "email" name = "email"></input><br>

                        <label for ="htele">Home Telephone Number:<span>*</span></label>
                        <input type ="tel" id = "htele" name = "htele"></input><br>

                        <label for ="mnum">Mobile Number:<span>*</span></label>
                        <input type = "tel" id ="mnum" name = "mnum"></input><br>

                        <label for = "address">Address:<span>*</span></label>
                        <input type = "text" id = "address" name = "address"></input><br>           
                    
					    <button type="submit" name ="register" value = "Insert" >Register</button>
				
					</form>					
				</div><br/>				
			<p style ="text-align : right;" >* 15$ will be charged per year for loyalty membership.</p>
		</div>
		
		</div>


    <div class="footer-main-div">
        <div class ="address">
            <h3>VISIT US</h3> <br>
       <p > No.32<br>
        New lane<br>
        Colombo 8</p> 
    </div>

    <div class ="contactus">
           <h3> CONTACT US </h3> <br>
            +94112224448 <br>
            +94112224449 <br>
            1199 <br> <br>
            cureplus@gmail.com </p>

    </div>





    <div><p id="partners"> Partnerships</p> <br>
        <p> <a class="weblinks" href="https://www.lankahospitals.com/en/"> Lanka Hospital </a> <br><br>  <a class="weblinks" href="http://www.nawaloka.com/"> Nawaloka Hospital </a> <br><br> <a class="weblinks" href="https://www.hemashospitals.com"> Hemas Hospital </a> </p>
    </div>










    <div class="footer-social-icons">
        <ul>
            <li> <a href="https://www.facebook.com/"  target = "blank"><i class="fa fa-facebook"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-twitter"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-google-plus"></i></a></li>
            <li> <a href="#"  target = "blank"><i class="fa fa-instagram"></i></a></li>
        </ul>
            
        
    </div>

    
        <a href="contactus.php"> <h2 id="GIVE_US_A_FEEDBACK">GIVE US A FEEDBACK</h2> </a>

</body>    
</html>