

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
        
        <h4>ADMIN</h4>     
        </center>
        <a href="Home.php">   <span>Home</span></a>        
        <a href="Students.php">    <span>Students</span></a>      
        <a href="view_Attendence.php">     <span>Attendance</span></a>  
       
   </div>
  <!--sidebar end-->
   <div Class="content">
   <div class="btn_group">
            <br>
            <br>
            
        <br>
        <br>        
                      
       <br>
       <a href="Students.php"  class="btn btn_big"> Back </a>
       </form>
    </div>

 </div>
 <div class="attendance_content">
  <br>
 <br>
 <br>

<?php
   include("connection.php");
   session_start();


   if(isset($_POST["sub"])) {

     if(!empty($_POST['class']) ) {
		$class=$_POST['class'];  

      $class = $mysql_obj->real_escape_string($_POST['class']);
      
      
      $loopCond=true;     
      while($class=="class1"){
 //Mysq select query
 $class_resp = "class_1_attendanceclass_attendance";
 $query = " SELECT DISTINCT user_id,first_name,last_name  FROM  class_1_attendanceclass_attendance  ";
  
break; } 
     
$loopCond=true;
while($class=="class2"){
//Mysq select query
$class_resp = "class_2_attendance";
$query = " SELECT DISTINCT user_id,first_name,last_name FROM  class_2_attendance  ";
   
break;}


$loopCond=true;
 while($class=="class3"){
//Mysq select query
$class_resp = "class_3_attendance";
$query = " SELECT DISTINCT user_id,first_name,last_name  FROM  class_3_attendance  ";
 break;}


 $loopCond=true;
 while($class=="class4"){
//Mysq select query
$class_resp = "class_4_attendance";
$query = " SELECT DISTINCT user_id,first_name,last_name  FROM  class_4_attendance   ";
 break;}



 $loopCond=true;
 while($class=="class5"){
//Mysq select query
$class_resp = "class_5_attendance";
$query = " SELECT DISTINCT user_id,first_name,last_name FROM  class_5_attendance  ";
    
 break;}



 $loopCond=true;
 while($class=="class6"){
//Mysq select query
$class_resp = "class_6_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  class_6_attendance  ";
 break;}



 $loopCond=true;
 while($class=="class7"){
//Mysq select query
$class_resp = "class_7_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  class_7_attendance  ";
 break;}


 $loopCond=true;
 while($class=="form1"){
//Mysq select query
$class_resp = "form1_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  form1_attendance  ";
 break;}


 $loopCond=true;
 while($class=="form2"){
//Mysq select query
$class_resp = "form2_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  form2_attendance   ";
 break;}


 $loopCond=true;
 while($class=="form3"){
//Mysq select query
$class_resp = "form3_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  form3_attendance   ";
 break;}


 $loopCond=true;
 while($class=="form4"){
//Mysq select query
$class_resp = "form4_attendance";
$query = " SELECT DISTINCT  user_id,first_name,last_name FROM  form4_attendance   ";
 break;}

    

      if ($result = mysqli_query($mysql_obj,$query)) {
            if (mysqli_num_rows($result) > 0) {
            
               
             $table = "";
             while ($row = $result->fetch_assoc()){
                  $user_id = $row['user_id'];
                  $first_name = $row['first_name'];
                  $last_name = $row['last_name'];
                  
                  

             $table .= "<tr>
             <td>$user_id</td>             
             <td>$first_name</td>
             <td>$last_name</td> 
             
             ";
             
                              
                   
                 } 
            echo   " <h1>REGISTERED STUDENTS</h1>  ";  
             echo "<table>               
             <tr>
             <th>ID   </th>            
             <th>FIRST NAME   </th>
             <th>LAST NAME    </th>
             
                      
             </tr>
             <tr>
             $table
             </tr>
             </table>";
            } else {
               echo " <h1> NO REGISTERED STUDENT IN THAT CLASS  </h1>"; }
          }
      } else {  
          header("location:Students.php");
          echo "<script> alert('All fields are required !!!')</script>";
          
     }


     }
      $mysql_obj->close();
      ?>
        
 </div>
 
 </body>
 </html>