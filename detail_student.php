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
         <a href="#" class="logout_btn">Logout</a>
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
        <a href="Results_students.php">   <span>Results</span></a>            
        <a href="view_AttendenceStudent.php">     <span>Attendence</span></a>  
        <a href="detail_student.php"><span>Details </span> </a>
   </div>
  <!--sidebar end-->
    <br>
    <br>
    <br>
   <div class="content">
      <form method="POST" action="save_detail_student.php" class="lolo">
      <p>STUDENT ID </p>
      <input type="text" name="id" placeholder="Enter ID">
       <hr>
      <p> USERNAME </p>
      <input type="text" name="lastname"  placeholder="Enter Last Name">
      
      <hr>
      
        <p>Which class are you ? </P>
               
       <select name="class">
					<option value="">--select class--</option>
					<option value="class1">Class 1</option>
					<option value="class2">class 2</option>
          <option value="class3">class 3</option>
          <option value="class4">class 4</option>
          <option value="class5">class 5</option>
          <option value="class6">class 6</option>
          <option value="class7">class 7</option>

                </select>
                <br>
                <br>
        <input type="submit" name="sub"  class="btn_group" value="SAVE">       
       </form>
   

      
   </div>

</body>
</html>