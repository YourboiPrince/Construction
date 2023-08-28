<?php

//conncting to the database 
if (isset($_POST['yourname']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['phoneno'])) {
	include 'db_conn.php';

	function validate($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);

		return $data;
	}

	$yourname=validate($_POST['yourname']);
  $email=validate($_POST['email']);
  $message=validate($_POST['message']);
	$phoneno=validate($_POST['phoneno']);

	if (empty($yourname) || empty($email) || empty($message) || empty($phoneno)) {
		header("Location : contact.html");

	}else{
		$sql="INSERT INTO contact (yourname,email,message,phoneno) VALUES ('$yourname','$email','$message','$phoneno')";
		$result=mysqli_query($db, $sql);

		if ($result) {
			echo "Your message was sent successfull";
		}else{
			echo "Your message could not be sent successfully";
		}
	}
}else{
	header("Location : contact.html");
}

?> 
