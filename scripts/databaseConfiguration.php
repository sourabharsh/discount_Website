<?php
	
	// Database Configuration
	$mysql_hostname = "localhost";
	$mysql_username = "root";
	$mysql_password = "";
	$mysql_database = "emails";
	
	// connect to the Database 
	$mysql_conn = mysql_connect($mysql_hostname,$mysql_username,$mysql_password)
					or die("Sorry, Problem connecting with our System :|");
	
	mysql_select_db($mysql_database,$mysql_conn)
		or die ("Sorry, Problem connecting to our database :|");
	
	$sql = "SELECT 1 FROM emails";
	if(mysql_query($sql,$mysql_conn) === FALSE)
	{
		$sql = "CREATE TABLE emails
		(
		Id int Not NULL,
		email varchar(400) NOT NULL,
		PRIMARY KEY (Id)		)";
		
		$result = mysql_query($sql,$mysql_conn)
				 or die("Failed to create the table Users " .mysql_error($mysql_conn));
	};
	//Select the table query
	$sql = "SELECT 1 FROM  query";
	if(mysql_query($sql,$mysql_conn) === FALSE)
	{
		$sql = "CREATE TABLE query
				( name varchar(500) NOT NULL,
				  email varchar(500) NOT NULL,
				  url varchar(500),
				  address varchar(500),
				  query varchar(2000)

				)";
		$result = mysql_query($sql,$mysql_conn)
				 or die("Failed to create the table query " .mysql_error($mysql_conn));
	}
		
		
	
				 
	
	

?>