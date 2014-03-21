<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Zigles</title>
<link href="template.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="shortcut icon" type="image/png" href="assets/favicon.png"/>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500' rel='stylesheet' type='text/css'>
	
</head>

<body class="html">
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
    
    <div class="middle_section">
    	
	    <div class="subscribe">
	        <h2>Coming soon,</br> the shopping discount site which will change the way you shop!</h2>
    	    <p>Be notified when Zigles is ready to launch and it will be totally   ......... free :)</p>
      		
            <form method="post" action="#">
            	<input id="subscribe_text" name="email_id" placeholder="type your email-id here..." type="text"/>
		        <input id="subscribe_button" type="submit" name="subscribe_button"  />		                         
            </form>            
            <p/>
            
            

    		 
                <?php
               // script for user subscription
			   include('config.php');
			   if(isset($_POST['subscribe_button'])){
				   $email_id = $_POST['email_id'];
				   if(preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email_id)){					   

						//Find out the number of entries
						$sql = "SELECT * FROM emails";
						$result = mysql_query($sql,$mysql_conn);
						$Id = mysql_num_rows($result) + 1;
												
						//Insert the email id in emails table of database emails
						$sql = "INSERT INTO emails( Id, email )
								  VALUES(" .$Id ." , '" .$email_id ."' )";

						$result = 	mysql_query($sql,$mysql_conn)
										or die(mysql_error($mysql_conn));
					   
					   if($result == true){
						   print "<span>Thanks for subscribing to us!</span>";
						   }
				   
					   }
					   
					   if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email_id))
					   {
						print '<span class="invalid_Id" >Please provide a valid email Id</span>';
					   }
				   }
			?>
         </div> 
        <img class="background_image" src="assets/shopping/shopping_1.png"/>
    </div>
    
    
    <!--  footer section    -->   	         
    <div class="footer">
    	<div class="footer_menu">
        	<a href="#">HOME </a>
            |
            <a href="#">CONTACT US</a>
            |		
            <a href="#">ABOUT US</a>        	            
        </div>

    </div>
</body>
</html>