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
        records in class .
    </p>
    <br>
   
       <p><b>STUDENTS</b></p>
    <ul>    
      <li>Register for monitoring attendence progress</li>
      
    </ul>  
    <p><b>TEACHING STAFF</b></p>
    <ul>
      <li>View students attendence progress</li>
      
      <br>
      <li>Add students attendence  progress</li>
    </ul> 
  </div>

	
		<div class="login-box" align="middle">
			<img src="avatar.jpeg" alt="avatar" class="avatar">
			<form name="myform" method="post" action="check_login.php">
				<p>E-mail:</p>
				<input type="text" id="email" name="email" placeholder="Enter Email">
				<p>Password:</p>
				<input type="password" id="password" name="pass" placeholder="Enter Password">
				<p> <input type="SUBMIT" name="sub" id="btn" value="Login" /></p>
        <br/>
        <br/>
				<p>New user ?<a href="Register.php"  >Create account</a></p>
        
			</form>

	</div>


</body>
</html>