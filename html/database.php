<?php
	$fname = $_POST['fname'];
    $mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];
    $mblno = $_POST['mblno'];
	$email = $_POST['email'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fname,mname,lname, gender,mblno,email) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssis",$fname,$mname,$lname,$gender,$mblno,$email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>