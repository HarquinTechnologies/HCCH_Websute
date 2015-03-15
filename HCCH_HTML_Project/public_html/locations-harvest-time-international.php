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
        <script src="https://maps.googleapis.com/maps/api/js"></script>
<!------------------------------------------------------------------------------
                              Generate Map
------------------------------------------------------------------------------->
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('map_canvas');
            var mapOptions = {
              center: new google.maps.LatLng(28.815030, -81.309443),
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);
            
            // Creating a marker and positioning it on the map    
            var marker = new google.maps.Marker({    
              position: new google.maps.LatLng(28.815030, -81.309443),    
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
                    <h1 id="NavigatorHeader">Orange Blossom Family Health at Harvest Time International</h1>
                    <h2>Find Us</h2>
                    <p>225 Kennel Rd.</p>
                    <p>Sanford, FL 32771</p>
                    <h2>Call Us</h2>
                    <p>(407) 447-2642</p>
                    <h1 id="NavigatorHeader">Services at this Location</h1>
                    <p>Primary & Preventive Medical Care</p>
                    <p>Behavioral Health Counseling</p>  
                    <p>Rapid HIV Testing</p>       
                    <p>On-Site Laboratory</p>                    
                    <h1 id="NavigatorHeader">Hours</h1>
                    <p>Monday & Thursday</p>
                    <p>8:00 AM - 5:00 PM</p>
                </div>                
                <div class="sideBarColumn col-md-2 hidden-sm hidden-xs">
                    <ul id="sidebar">
                        <li><img src="images/harvest-1.jpg" alt="Harvest Photo 1"/></li>
                        <li><img src="images/harvest-1.jpg" alt="Harvest Photo 2"/></li>
                        <li><img src="images/harvest-1.jpg" alt="Harvest Photo 3"/></li>
                    </ul>
                </div>
            </div>
        </div>
<?php include ('footer.php'); ?>
