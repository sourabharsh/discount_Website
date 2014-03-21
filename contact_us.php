<!DOCTYPE html>


<head>
<title>Contact us</title>
<link href="template.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

<link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
<link href="contact_us.css" rel="stylesheet" type="text/css" />
<script src="jquery.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
</head>

<body > 
	<div class="header">
    	<div class="logo">
        	<a href="#">
    			<img src="assets/logo.png" />
		    </a>
	    </div>
        
        <div class="search_section">
        	<input id="search_text" type="text"/>
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
            <div >
            	<script src="assets/form_validation.js"></script>
            	<form class="contact_form" method="post" action="#"> 
                	<h2>CONTACT FORM</h2>
	               	<p class="constant_width">Name: </p>  <input onBlur="validateName(this.value)" type="text" name="name" placeholder="Art Vandelay" id="userName"
                    required="required" aria-required="true" spellcheck="false" />
                    <label id="name"> &nbsp;</label> </br>
                    
                    <p >Email:</p>  <input type="text" name="email" placeholder="abc@xyz.com" id="userEmail"
					 required="required" aria-required="true"  spellcheck="false" onBlur="validateEmail(this.value)"
                     /> 
                    <label id="email"> &nbsp;</label> </br>

                     
                    <p>Website: </p>  <input type="text" name="website" id="url" placeholder="yourcompany.com" spellcheck="false"
                     />                   
                    </br>                    
                    
                    <p>Address: </p>  <input type="text" name="address" id="url" placeholder="your address..."/> </br>
                    
					  <textarea id="message" type="text" name="query" placeholder="type your query here..."></textarea> </br>
						<span id="result"></span>
                    <input name="contact_form_submit"  id="contact_form_submit" type="submit"  value=""></input>
 `                    
                </form>
            	    
                <script src="form_submit.js"></script>
            </div>
            
            <script>
            	function initialize(){
                	var myLatLing  = new google.maps.LatLng(12.986086199999999,80.2387182);
                    var mapOptions = {
                    	zoom:15,
	                    center: myLatLing
    	                };
                
                    var map = new google.maps.Map(document.getElementById('map_canvas'),mapOptions);
                    
                    var contentString = '<div id="infoWindow">' +
                    					'<img src="assets/logo_in_map.png"></img>' + 
                    					
                                        '<p>#422, Jamuna Hostel , IIT Madras, Chennai-600036</p>' +
                    					'</div>';
                    					
                    var infoWindow = new google.maps.InfoWindow({
                        content:contentString
                    });
                    
                    var marker = new google.maps.Marker({
                        position: myLatLing,
                        map:map,
                        title: 'Zigles.com :)'
                    });
                    
                    google.maps.event.addListener(marker, 'click', function() {
                        infoWindow.open(map,marker);
                    });
                 }
                
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>
            
            <!--EMbed google map -->
            <div id="map_canvas">          	
            </div>
            
    </div>
			
</body>
</html>