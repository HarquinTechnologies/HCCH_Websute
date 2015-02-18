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
              center: new google.maps.LatLng(28.309908, -81.466202),
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            
            // Creating a marker and positioning it on the map    
            var marker = new google.maps.Marker({    
              position: new google.maps.LatLng(28.309908, -81.466202),    
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
                    <h1 id="NavigatorHeader">Orange Blossom Family Health at Community Hope Center </h1>
                    <h2>Find Us</h2>
                    <p>2198 Four Winds Blvd.</p>
                    <p>Kissimmee, FL 34746 </p>
                    <h2>Call Us</h2>
                    <p>(407) 770-0430</p>
                    <h1 id="NavigatorHeader">Services at this Location</h1>
                    <p>Primary & Preventive Medical Care</p>
                    <p>Behavioral Health Counseling</p>
                    <p>Substance Abuse Counseling</p>
                    <p>Rapid HIV Testing</p>
                    <p>On-Site Laboratory </p>
                    <h1 id="NavigatorHeader">Hours</h1>
                    <p>Monday - Friday</p>
                    <p>8:00 AM - 5:00 PM</p>
                </div>                
                <div class="sideBarColumn col-md-2 hidden-sm hidden-xs">
                    <ul id="sidebar">
                        <li><img src="images/hope-1.jpg" alt="Hope Photo 1"/></li>
                        <li><img src="images/hope-2.jpg" alt="Hope Photo 2"/></li>
                        <li><img src="images/hope-3.jpg" alt="Hope Photo 3"/></li>
                    </ul>
                </div>
            </div>
        </div>
<?php include ('footer.php'); ?>
