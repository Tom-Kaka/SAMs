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
        
        <h4>ADMIN</h4>     
        </center>
        <a href="Home.php">   <span>Home</span></a>
        
        <a href="view_students.php">    <span>Students</span></a>      
        <a href="view_Attendence.php">     <span>Attendence</span></a>  
       
   </div>
  <!--sidebar end-->
   <div class="content">
   <div class="btn_group">
            <br>
            <br>
            <form method="POST" id="attendance" action="view_REG.php" >

            <h4>Choose Class :</h4>
               
       <select name="class">
					<option value="">--select class--</option>
          
		  <option value="class1">Class 1</option>
		  <option value="class2">class 2</option>
          <option value="class3">class 3</option>
          <option value="class4">class 4</option>
          <option value="class5">class 5</option>
          <option value="class6">class 6</option>
          <option value="class7">class 7</option>
          <option value="form1">Form 1</option>
          <option value="form2">Form 2</option>
          <option value="form3">Form 3</option>
          <option value="form4">Form 4</option>
 
                </select>
         <br>
          <br>
          <br>
            <input type="submit"  name="sub" value="Submit" class="jojo" >      
   </div>

</body>
</html>