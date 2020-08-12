
 <?php
include('connection.php');
if (isset($_POST["add"])) {
	
	$date= date('Y-m-d');	


	
	$class= $mysql_obj->real_escape_string($_POST['class']);

	
	$arr_ids = explode(",", $_POST['ids']);
	$arr_subjects = explode(",", $_POST['subjects']);
	$arr_status = explode(",", $_POST['status']);
    $arr_comments = explode(",", $_POST['comments']);
$max_no = count($arr_ids);
for ($i = 0; $i < $max_no; $i++){
	
$subject = $arr_subjects[$i];
$id = $arr_ids[$i];
$status = $arr_status[$i];
$comments = $arr_comments[$i];
$query = "SELECT DISTINCT first_name, last_name FROM $class WHERE user_id='$id'";
$result = $mysql_obj->query($query);
	 if (mysqli_num_rows($result) > 0) {
	  while ($row = $result->fetch_assoc()){
		   $first_name = $row['first_name'];
		   $last_name = $row['last_name'];
	$sql = "INSERT INTO $class (first_name, last_name, subject, date, status, comment, user_id) 
	    VALUES ('$first_name', '$last_name','$subject','$date', '$status', '$comments', '$id')";
	$result_ = $mysql_obj->query($sql);
       }
	}
}
	if ($result_) {
		echo "<script> alert('Attendance added successfully')</script> ";
		header("location: view_attendence.php");
	} else {
		echo "Error:";
	}
}
$mysql_obj->close();
   ?>