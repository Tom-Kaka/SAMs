<?php
 include("connection.php");
   session_start();
  ?> 

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>SAMs</title>
    <link rel="stylesheet"  href="styles.css">
    <script src="https://use.fontawesome.com/f9772b2471.js"></script>
</head>
<body>
  
   <!-- header start-->
    <header>
      <label for="check">
        
        
        <i class="fas fa-align-justify" id="sidebar_btn" ></i>
      </label>
     <div class="left_area" >
     <h3><span>SAMs</span></h3>
     </div>
     <div class="right_area">
         <a href="welcome.php" class="logout_btn">Logout</a>
     </div>
    </header>
  <!--header end -->
  <!--sidebar start-->
   <div class="sidebar">
        <center >
        <img src="images.png" class="logo_image"    alt="logo">
        
        <h4>STUDENT</h4>     
        </center>
        <a href="Home_student.php">   <span>Home</span></a>
        
           
        <a href="view_Attendence.php">     <span>Attendance</span></a>  
       
   </div>
  <!--sidebar end-->
   <div Class="content">
   <div class="btn_group">
            <br>
            <br>
            <form method="POST" id="attendance" action="save_attendance.php" >
            
</form>
       <br>
       <br>
        <a href="view_attendenceStudent.php"  class="btn btn_big"> Back</a>
       </form>
    </div>

 </div>
 
 <div class="attendance_content">
  <br>
 <br>
 <br>
    <?php
   
   if (isset($_POST["sub"])) {
           
     if(!empty($_POST['class']) && !empty($_POST['date']) && !empty($_POST['subject'])) {

		$class=$_POST['class'];  
		$date=$_POST['date'];  
          $subject=$_POST['subject'];





      $class = $mysql_obj->real_escape_string($_POST['class']);
      $date = ($_POST['date']);
      $subject = $mysql_obj->real_escape_string($_POST['subject']);
      
      $loopCond=true;     
      while($class=="class1"){
 //Mysq select query
 $class_resp = "class_1_attendanceclass_attendance";
 $query = " SELECT DISTINCT user_id,date,first_name,last_name,subject,status,comment  FROM  class_1_attendanceclass_attendance  WHERE subject='$subject' && date='$date' ";
  
break; } 
     

      $loopCond=true;
      while($class=="class2"){
 //Mysq select query
 $class_resp = "class_2_attendance";
 $query = " SELECT DISTINCT user_id,date,first_name,last_name,subject,status,comment  FROM  class_2_attendance  WHERE subject='$subject' && date='$date'";
         
      break;}

      
      $loopCond=true;
       while($class=="class3"){
  //Mysq select query
  $class_resp = "class_3_attendance";
  $query = " SELECT DISTINCT user_id,date,first_name,last_name,subject,status,comment  FROM  class_3_attendance WHERE subject='$subject' && date='$date' ";
       break;}


       $loopCond=true;
       while($class=="class4"){
  //Mysq select query
  $class_resp = "class_4_attendance";
  $query = " SELECT DISTINCT user_id,date,first_name,last_name,subject,status,comment  FROM  class_4_attendance  WHERE subject='$subject'  && date='$date' ";
       break;}



       $loopCond=true;
       while($class=="class5"){
  //Mysq select query
  $class_resp = "class_5_attendance";
  $query = " SELECT DISTINCT user_id,date,first_name,last_name,subject,status,comment FROM  class_5_attendance  WHERE subject='$subject'  && date='$date' ";
          
       break;}



       $loopCond=true;
       while($class=="class6"){
  //Mysq select query
  $class_resp = "class_6_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  class_6_attendance  WHERE subject='$subject'  && date='$date'";
       break;}



       $loopCond=true;
       while($class=="class7"){
  //Mysq select query
  $class_resp = "class_7_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  class_7_attendance  WHERE subject='$subject' &&  date='$date' ";
       break;}


       $loopCond=true;
       while($class=="form1"){
  //Mysq select query
  $class_resp = "form1_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  form1_attendance  WHERE subject='$subject' &&  date='$date' ";
       break;}


       $loopCond=true;
       while($class=="form2"){
  //Mysq select query
  $class_resp = "form2_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  form2_attendance  WHERE subject='$subject' &&  date='$date' ";
       break;}


       $loopCond=true;
       while($class=="form3"){
  //Mysq select query
  $class_resp = "form3_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  form3_attendance  WHERE subject='$subject' &&  date='$date' ";
       break;}


       $loopCond=true;
       while($class=="form4"){
  //Mysq select query
  $class_resp = "form4_attendance";
  $query = " SELECT DISTINCT  user_id,date,first_name,last_name,subject,status,comment FROM  form4_attendance  WHERE subject='$subject' &&  date='$date' ";
       break;}

      if ($result = mysqli_query($mysql_obj,$query)) {
            if (mysqli_num_rows($result) > 0) {
            
               $i = 0;
             $table = "";
             while ($row = $result->fetch_assoc()){
                  $user_id = $row['user_id'];
                  $date = $row['date'];
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name'];
                  $subject =$row['subject'];
                  $status = $row['status'];
                  $comments = $row['comment'];

             $table .= "<tr>
             <td>$user_id</td>
             <td>$date</td>
             <td>$first_name</td>
             <td>$last_name</td>
             <td>$subject</td>
             <td>$status</td>
             <td>$comments</td> ";                  
                   $i++;
                 } 
            echo   " <h1>ATTENDANCE</h1>  ";  
             echo "<table>               
             <tr>
             <th>ID   </th>
             <th>DATE </th>
             <th>FIRST NAME   </th>
             <th>LAST NAME    </th>
             <th>SUBJECT </th>
             <th>STATUS    </th>
             <th>COMMENTS   </th>            
             </tr>
             <tr>
             $table
             </tr>
             </table>";
            }  else {
                echo " <h1 color='red'>SELECTED ATTENDANCE IS NOT RECORDED </h1>";
            }
          } 
      }  else {  
          header("location:view_attendenceStudent.php");
          echo "<script> alert('All fields are required !!!')</script>"; }

     }
      $mysql_obj->close();
      ?>
      

       
   
 </div>
 <script src="script.js"></script>
</body>
</html>