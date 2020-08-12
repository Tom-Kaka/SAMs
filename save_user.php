<?php
include('connection.php');
if (isset($_POST["sub"])) {


	


	$id = $mysql_obj->real_escape_string($_POST['id']);
	$firstname = $mysql_obj->real_escape_string($_POST['firstname']);
	$lastname = $mysql_obj->real_escape_string($_POST['lastname']);
	$email = $mysql_obj->real_escape_string($_POST['email']);
	$password = $mysql_obj->real_escape_string($_POST['pass']);
	$role = $mysql_obj->real_escape_string($_POST['role']);
	$class= $mysql_obj->real_escape_string($_POST['class']);


        
	if($numrows==0) {
echo	$sql = "INSERT INTO user (user_id,first_name, last_name, role, email,password) VALUES ('$id','$firstname', '$lastname', '$role', '$email', '$password')";
	$result = $mysql_obj->query($sql);
	} else {  
		echo "That account already exists! Please try again with another.";
		header("location: Register.php ");
	}  





       if($role=="STUDENT"){
		   if($class=="class1"){
	 echo	$sql = "INSERT INTO class_1_attendanceclass_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
		$result = $mysql_obj->query($sql);
		   }  
	}
	
	if($role=="STUDENT"){
		if($class=="class2"){
  echo	$sql = "INSERT INTO class_2_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
	 $result = $mysql_obj->query($sql);
		}  
 }
		
 if($role=="STUDENT"){
	if($class=="class3"){
echo	$sql = "INSERT INTO class_3_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}

if($role=="STUDENT"){
	if($class=="class4"){
echo	$sql = "INSERT INTO class_4_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}

if($role=="STUDENT"){
	if($class=="class5"){
echo	$sql = "INSERT INTO class_5_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}

if($role=="STUDENT"){
	if($class=="class6"){
echo	$sql = "INSERT INTO class_6_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}

if($role=="STUDENT"){
	if($class=="class7"){
echo	$sql = "INSERT INTO class_7_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}

 

if($role=="STUDENT"){
	if($class=="form1"){
echo	$sql = "INSERT INTO form1_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}


 
if($role=="STUDENT"){
	if($class=="form2"){
echo	$sql = "INSERT INTO form2_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}


  
if($role=="STUDENT"){
	if($class=="form3"){
echo	$sql = "INSERT INTO form3_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}  
}


  
if($role=="STUDENT"){
	if($class=="form4"){
		
echo	$sql = "INSERT INTO form4_attendance (user_id,first_name,last_name) VALUES ('$id','$firstname', '$lastname')";
 $result = $mysql_obj->query($sql);
	}   
}


	if ($result) {
		echo "<script> alert('Congratulations you have registered successfully')</script> ";
		header("location: welcome.php");
	} else {
		echo "Error:";
	}
} 
 


      

