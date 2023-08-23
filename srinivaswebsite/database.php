<?php
	$fname = $_POST['fname'];
    $mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$email =$_POST["email"];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fname,mname,lname, gender,email,password) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss",$fname,$mname,$lname,$gender,$email,$password);
		$execval = $stmt->execute();
		echo $execval;
		header('location:http://localhost/srinivaswebsite/Srinivas_website.html');
		$stmt->close();
		$conn->close();
	}
  
?>