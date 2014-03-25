<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Facebook</title>
</head>

<body>

	<div id="fb-root">
	  	<div class="fb-like" data-send="true" data-width="450" height="400" data-show-faces="true"></div>
    </div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '476696579096897',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
	   
	   document.getElementById('fb-root').innerHTML = $me['id'];
	   
	   
	   
		
    </script>
</body>
</html>