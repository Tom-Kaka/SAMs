<?php
include('connection.php');
session_start();

if (isset($_POST["sub"])) {

	if(!empty($_POST['email']) && !empty($_POST['pass'])) {  
		$email=$_POST['email'];  
		$password=$_POST['pass'];  
	  
	$email = $mysql_obj->real_escape_string($_POST['email']);
	$password = $mysql_obj->real_escape_string($_POST['pass']);	
	$query = "SELECT * FROM user where email='$email' AND password='$password' ";
	$result = $mysql_obj->query($query);
	$num = mysqli_num_rows($result);
	    	
	   if ($num == 0) {		
		echo "Invalid username or password!";
		  header("location:welcome.php");
	} else {
		$row = mysqli_fetch_array($result);
		$_SESSION['id'] = $row['user_id'];
		$_SESSION['email'] = $row['email'];
        $_SESSION['lastname'] = $row['last_name'];
		
		
		$role = $row['role'];

		echo "<script> alert('login successful')</script>";
		if ($role == "TEACHER") {
			header("location: index.php");
		} else {
			header("location: index_student.php ");
		}
	}
  } else {  
	header("location:welcome.php");
	echo "<script> alert('All fields are required !!!')</script>";
	
}
}