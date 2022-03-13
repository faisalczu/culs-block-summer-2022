<?php 
	require 'connection.php';
	if(isset($_POST['submit']))
	{	
		$name=$_POST['name'];
		$email=$_POST['email'];
        $address=$_POST['address'];
		$phone=$_POST['phone'];
		$sql = "INSERT INTO users (uname,uemail,uaddress,phonenumber) VALUES ('$name','$email','$address','$phone')";
	}
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      }


?>