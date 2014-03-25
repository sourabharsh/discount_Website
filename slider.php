<!doctype html>
<head>
  <style>
    .banner { position: relative; overflow: auto; }
    .banner li { list-style: none; }
        .banner ul li { float: left; }
  </style>

  <script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script src="//unslider.com/unslider.min.js"></script>
  

  <script>
	$(function() {
    $('.banner').unslider();
	})
  </script>
  
</head>
<body>
	<div class="banner">
    <ul>
        <li><img src="assets/shopping/shopping_4.jpg"/></li>
        <li><img src="assets/shopping/shopping_5.jpg"/></li>
		<li><img src="assets/shopping/shopping_6.jpg"/></li>
    </ul>
</div>
</body>
</html>