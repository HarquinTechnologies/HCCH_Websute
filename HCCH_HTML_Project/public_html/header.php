<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Basic Needs -->
        <title>Welcome To Orange Blossom Family Health</title>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, maximum-scale=1.0">

        <!-- Compact View Support -->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <!-- Import JavaScript Library and Modernizr -->
	<!--<script src="js/modernizr.custom.js"></script>-->
<!--     <script src="//code.jquery.com/jquery-1.10.2.js"></script>  -->

              
                 
        <!-- Style Sheets -->
        

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css">     
        <link rel="stylesheet" href="css/slicknav.css">  
        
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

        
       <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script src="js/jquery.slicknav.js"></script> 
        <script src="js/responsive.js"></script>
         
        
        
    </head>
    <body>  

        <div class="container">
            <a href="http://test.harquintechnologies.com/index.php"><img id="logo" src="/images/logo.png" alt="logo"></a>
			  <div class="col-md-5 col-xs-5" id="notice">
				Sliding Fee Discounts Available
			  <br/>
			  <span id="noticeLine2">Please click here for details</span>
			  <br/>
			  <a href="http://test.harquintechnologies.com/SlidingFeeEnglish.pdf">English</a> <a href="http://test.harquintechnologies.com/SlidingFeeSpanish.pdf">Spanish</a>
			  <br/>
				No patient will be turned away due to an inability to pay.
			  </div>    
            <ul class="col-md-3 col-xs-3" id="homeDonateMenu">
                <li><a href="http://test.harquintechnologies.com/index.php">Home</a></li>             
                <br>
                <li><a href="http://www.hcch.org/">Interested in our Services for the homeless?</a></li><a href="http://www.hcch.org/">                
                </a><li><a href="http://www.hcch.org/">Click here for more information.</a></li>
            </ul>
        </div>
        <div class="container">
            <div id="desktop-menu">
                <ul class="dropdown">
                  <li>
                      <a href="about-our-purpose.php">About Us</a>
                      <ul class="subMenu">
                          <li><a href="about-our-purpose.php">Our Purpose</a></li>
                          <li><a href="about-our-history.php">Our History</a></li>                          
                          <li><a href="NOTICE-OF-PRIVACY-POLICY.pdf" target="_blank">Our Privacy Practices</a></li>
                          <li><a href="about-our-providers.php">Our Providers</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="services-behavioral-health.php">Services</a>
                      <ul class="subMenu">
                          <li><a href="services-medical.php">Medical</a></li>
                          <li><a href="services-dental.php">Dental</a></li>
                          <li><a href="services-behavioral-health.php">Behavioral Health</a></li>
                          <li><a href="services-vision.php">Vision</a></li>
                          <li><a href="services-pharmacy.php">Pharmacy</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="locations-orange-blossom-trail.php">Locations</a>
                      <ul class="subMenu">
                          <li><a href="locations-orange-blossom-trail.php">Orange Blossom Trail</a></li>
                          <li><a href="locations-community-food-outreach-center.php">Michigan Street</a></li>
                          <li><a href="locations-community-hope-center.php">Kissimmee</a></li>
                          <li><a href="locations-harvest-time-international.php">Sanford</a></li>
                      </ul>
                  </li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li><a href="Contact-Us.php">Contact Us</a></li>
                </ul>
            </div>
            <div id="demo1">
                <ul id="mobile-menu" class="slicknav_nav" role="menu"> 
                <li>About Us
                    <ul>
                        <li><a href="about-our-purpose.php">Our Purpose</a></li>
                        <li><a href="about-our-history.php">Our History</a></li>   
                        <li><a href="about-our-providers.php">Our Providers</a></li>
                    </ul>
                </li>
                <li>Services
                    <ul>                        
                        <li><a href="services-medical.php">Medical</a></li>
                        <li><a href="services-dental.php">Dental</a></li>
                        <li><a href="services-behavioral-health.php">Behavioral Health</a></li>
                        <li><a href="services-vision.php">Vision</a></li>
                        <li><a href="services-pharmacy.php">Pharmacy</a></li>
                    </ul>
                </li>
                <li>Locations
                    <ul>
                        <li><a href="locations-orange-blossom-trail.php">Orange Blossom Trail</a></li>
                          <li><a href="locations-community-food-outreach-center.php">Michigan Street</a></li>
                          <li><a href="locations-community-hope-center.php">Kissimmee</a></li>
                          <li><a href="locations-harvest-time-international.php">Sanford</a></li>
                    </ul>
                </li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="Contact-Us.php">Contact Us</a></li>
                </ul>
            </div>      
        </div>
       <script type="text/javascript">
            $(document).ready(function(){
                    $('#mobile-menu').slicknav({
                        prependTo:'#demo1'
                    });
            });
        </script> 