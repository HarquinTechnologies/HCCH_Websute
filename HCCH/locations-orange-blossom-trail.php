<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php include ('header.php'); ?>
<!------------------------------------------------------------------------------
                              Load jQuery Library
------------------------------------------------------------------------------->
<!--        <script src="//code.jquery.com/jquery-1.10.2.js"></script>-->
<!------------------------------------------------------------------------------
                              Import Map Script
------------------------------------------------------------------------------->
       <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-59830876-1', 'auto');
            ga('send', 'pageview');
       </script>
                              <script src="https://maps.googleapis.com/maps/api/js"></script>
<!------------------------------------------------------------------------------
                              Generate Map
------------------------------------------------------------------------------->
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('map_canvas');
            var mapOptions = {
              center: new google.maps.LatLng(28.545560, -81.397870),
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            
            // Creating a marker and positioning it on the map    
            var marker = new google.maps.Marker({    
              position: new google.maps.LatLng(28.545560, -81.397870),    
              map: map    
            });  
          }
          
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>

<!------------------------------------------------------------------------------
                              Start Header
------------------------------------------------------------------------------->
        <div id="header"></div>
<!------------------------------------------------------------------------------
                               Start Content
------------------------------------------------------------------------------->
        <div class="container">
            <div class="row">
                <div class="mapColumn col-md-6" id="content">
                    <div id="map_canvas"></div>
                </div>                
                <div class="infoBarColumn col-md-4">
                    <h1 id="NavigatorHeader">Orange Blossom Trail </h1>
                    <h2>Find Us</h2>
                    <p>232 N. Orange Blossom Trail</p>
                    <p>Orlando, FL 32805</p>
                    <h2>Call Us</h2>
                    <p>Medical: (407) 428-5751</p>
                    <p>Dental: (407) 428-1672</p>
                    <p>Behavioral Health: (407) 428-5751 ext. 315</p>
                    <h1 id="NavigatorHeader">Services at this Location</h1>
                    <p>Primary & Preventive Medical Care</p>
                    <p>Oral Health Services</p>
                    <p>Behavioral Health Counseling</p>
                    <p>Substance Abuse Counseling</p>                    
                    <p>Vision Services</p>
                    <p>Mobile Medical Services</p>
                    <p>Mobile Dental Services</p>
                    <p>Rapid HIV Testing</p>
                    <p>On-Site Pharmacy</p>                    
                    <p>On-Site Laboratory</p>
                    <p>Street Outreach</p>
                    <h1 id="NavigatorHeader">Hours</h1>
                    <p>Monday - Friday</p>
                    <p>8:00 AM - 5:00 PM</p>
                </div>                
                <div class="sideBarColumn col-md-2 hidden-sm hidden-xs">
                    <ul id="sidebar">
                        <li><img src="images/obt-1.jpg" alt="OBT Photo 12"/></li>
                        <li><img src="images/obt-2.jpg" alt="OBT Photo 7"/></li>
                        <li><img src="images/obt-3.jpg" alt="OBT Photo 5"/></li>
                    </ul>
                </div>
            </div>
        </div>
<?php include ('footer.php'); ?>