<?php
	$host = 'localhost';
	$user= 'root';
	$pass = '';
	$db = 'block-summer-22';
	

	$conn = new mysqli($host,$user,$pass,$db);
	if ($conn->connect_error) 
	{

		die("Connection failed: ");
	}
	error_reporting(0);

  ?>