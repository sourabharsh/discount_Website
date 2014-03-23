<?php

	include('databaseConfiguration.php');
	
	$sql = "INSERT INTO query(name, email, url, address, query)
			VALUES('" .$_GET['name'] ."','" .$_GET['email'] ."','" .$_GET['url'] ."','" .$_GET['address'] ."','" .$_GET['query']
			 ."')";
	    print $sql;
	$result = mysql_query($sql,$mysql_conn)
				or die(mysql_error($mysql_conn));
				
	

?>