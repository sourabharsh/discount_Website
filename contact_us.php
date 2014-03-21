<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Contact us</title>
<link href="template.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
<link href="contact_us.css" rel="stylesheet" type="text/css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>

<body "> 
	<div class="header">
    	<div class="logo">
        	<a href="#">
    			<img src="assets/logo.png" />
		    </a>
	    </div>
        
        <div class="search_section">
        	<input id="search_text"type="text"/>
            <input id="search_button" type="button" />
        </div>               

        <div class="main_menu">
        	<a href="index.php">HOME </a>
            <a href="contact_us.php">CONTACT US</a>
            <a href="#">ABOUT US</a>        	            
        </div>
        
    </div>
    
    <div class="contactus">
        	<h1>Contact Zigles</h1>
            <p>Get in touch with us to get the ball rolling</p>            
            <div class="icons">
                <div class="icon">
                    <img src="assets/icons/email.png"/>
                    <p id="icon_caption">EMAIL</p>
                    <p>contact@zigles.com</p>
                </div>
            
                <div class="icon">
                    <img src="assets/icons/phone.png"/>
                    <p id="icon_caption">PHONE</p>
                    <p style="margin-top:20px">+91-8056019345,</p>
                    <p style="margin:0">+91-9043958231</p>
    
                </div>
                
                <div class="icon">
                    <img src="assets/icons/facebook.png"/>
                    <p id="icon_caption">Facebook</p>
                    <p>Like us</p>                
                </div>
                
            </div>
            <script>
            	function initialize(){
                var map_canvas = document.getElementById('map_canvas');
                var map = new google.maps.Map(map_canvas);
                var mapOptions = {
                	center: new google.maps.LatLng(12.9860432,80.23875369999999),
                    zoom: 15,
                    mapTypeId:  google.maps.MapTypeId.ROADMAP                    
                }
                var map = new google.maps.Map(map_canvas, mapOptions);
                }
               google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            
            <!--EMbed google map -->
            <div id="map_canvas">          	
            </div>
            
    </div>
			
</body>
</html>