<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php include ('header.php'); ?>   
<!------------------------------------------------------------------------------
                              Import Map Script
------------------------------------------------------------------------------->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
<!------------------------------------------------------------------------------
                              Generate Map
------------------------------------------------------------------------------->
        <script>
          function initialize() {
            var mapCanvas = document.getElementById('contact_map');
            var mapOptions = {
              center: new google.maps.LatLng(28.545560, -81.397870),
              zoom: 16,
              mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
            
            // Creating a marker and positioning it on the map    
            var marker = new google.maps.Marker({    
              position: new google.maps.LatLng(28.545560, -81.397870),    
              map: map    
            });  
          }
          
          google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <div class="container">
            <div class="row">
                <div class="mapColumn col-md-6" id="content">
                    <div class='mainContent'>
                        <span class='contactUsHeader'>Contact Us</span>
                        <p id='contactUsParagraph'>
                            We're here to answer any questions you may have about our Orange Blossom Health
                            Care experiences. Reach out to us and we'll respond as soon as we can.
                        </p>
                    </div>
                    <div id="contact_map"></div>
                    <div class='bottomOfContact'>
                        <span class='contactUsHeader'>Address</span>
                        <p>
                            232 N. Orange Blossom Trail <br/>
                            Orlando, FL 32805
                        </p>
                    </div>
                    <div class='bottomOfContact'>
                        <span class='contactUsHeader'>Email</span>
                        <p>
                            info@hcch.org
                        </p>
                    </div>
                    <div class='bottomOfContact'>
                        <span class='contactUsHeader'>Telephone</span>
                        <p>
                            (407) 428-5751
                        </p>
                    </div>
                </div>                
                <div class="col-md-6">
                    <form id="emailForm" action="php/send_form_email.php" method="post">
                        <div class="formTitle"><span>What Shall We Call You?</span></div>
                        <input type="text" name="name" value="Type Your Name Here">
                        <div class="formTitle" id="formTitle2"><span>Share Your Email</span></div>
                        <input type="text" name="email" value="We will keep it safe.  We promise!">
                        <div class="formTitle" id="formTitle3"><span>We're All Ears</span></div>
                        <textarea name="comments">Share with us any information that might help us to respond to your request
                        </textarea><br>
                        <div class="formTitle" id="formTitle4"><span><input id="formSubmitButton" type="submit" value="Send Message"></span></div>
                    </form>
                </div>
            </div>
        </div>
    <?php include ('footer.php'); ?>