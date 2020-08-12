<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>SAMs</title>
    <link rel="stylesheet"  href="styles.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
  

   <!-- header start-->
    <header>
      <label for="check">
        <i class="fa fa-bars" aria-hidden="true" id="sidebar_btn"></i>
        
      </label>
     <div class="left_area" >
     <h3><span>SAMs</span></h3>
     </div>
     <div class="right_area">
         <a href="welcome.php" class="logout_btn">Login</a>
     </div>
    </header>
  <!--header end -->
  <!--sidebar start-->
   <div class="sidebar">
        <center >
        <img src="images.png" class="logo_image"    alt="logo">
        
        <h4>WELCOME</h4>     
        </center>
        <p></p>
   </div>
  <!--sidebar end-->
  <div class="content2">
    <h1>Welcome to SAMs</h1>
    <p> The Student attendence managment system(SAMs) holds 
       all the students attendence 
        records in class and their respective results.
    </p>
    <br>
   
       <p><b>STUDENTS</b></p>
    <ul>    
      <li>Register for attendence progress</li>
      <br>
      <li>View results</li>
    </ul>  
    <p><b>TEACHING STAFF</b></p>
    <ul>
      <li>View students attendence progress</li>
      <br>
      <li>publish students results</li>
      <br>
      <li>Track students attendence and results progress</li>
    </ul> 
  </div>
   <div>
    <form name="myform" method="POST" action="save_user.php">
			<div class=" login-box2" align="center">
				<img src="avatar.jpeg" alt="avatar" class="avatar">
				<p>First Name:</p>
				<input type="text" id="firstname" onkeyup="validate();" name="firstname"	placeholder="Enter FirstName" />
				<p>Last Name:</p>
				<input type="text" id="lastname" onkeyup="validate();" name="lastname" placeholder="Enter LastName">
				<p>Role:</p>
				<select name="role">
					<option value="">--select role--</option>
					<option value="STUDENT" id="student">Student</option>
					<option value="TEACHER" id="teacher">teacher</option>
				</select>
        <p>Which class are you ? </P>
               
       <select name="class">
					<option value="">--select class--</option>
          <option value="STAFF">STAFF</option>
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
         <p>USER ID</P>
        <input type="text" id="id" name="id" placeholder="Enter ID">
				<br>
				<p>E-mail:</p>
				<input type="text" id="email" onkeyup="validate();" name="email" placeholder="Enter Email">
				<p>Password:</p>
				<input type="password" id="password" onkeyup="validate();" name="pass" placeholder="Enter Password">
			
				<input type="submit" id="sub" name="sub" onclick="validate();finalValidate();" value="Register" /></p>
			</div>
		</form>

   </div>
	


</body>
</html>