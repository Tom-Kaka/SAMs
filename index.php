

<?php
session_start();
include('connection.php');
if(isset($_POST["subt"])){
$user=$_POST['user'];
$pass=$_POST['pswd'];
$query="select * from staff where username='$user' and password='$pass'";
$exc=mysql_query($query);
$num = mysql_num_rows($exc);
if($num==false){
	
	echo "<script>alert('access denied')</script>";
	
}else{
	$row=mysql_fetch_array($exc);
	$_SESSION['username']=$row['username'];
echo "<script> alert('login successful')</script>";
	echo "<script>window.location='welcome.php'</script>";	
}
}
?>
<html>
<head>
<title>login page</title>
<style type="text/css">

.avatar {
  
   width:100px;
   height:100px;
   border-radius:50%;
   position: absolute;
   top:-50px;
  left:calc(50% - 50px);
  }




.login-box p{

   margin:0;
    padding:0;
    font-weight: bold ;
}


.login-box input{
     widith:5%;
     margin-bottom:20px;
   }


 .login-box input[type="text"],input[type="password"]{
     
       border: none;
       border-bottom:1px solid #FFF;
       background: transparent;
       outline: none ;
      height: 40px;
      color: #FFF;
      font-size:16px;
}

.login-box input[type="SUBMIT"] {
     
    outline: none;
    border: none ;
    height:40px;
    background:blue;
    color:#FFF;
    font-size:18px;
   border-radius:20px;

}




body{ 
        margin: 0;
        padding: 0;
        background: url(back1.JPEG);
        background-size: cover;
        font-family:sans-serif;
       font-weight: bold;
}

  
   
 .login-box{
   widith:300px ;
   height: 400px;
   background: rgba(0,0,0,0.5);
   color:white;
   top: 50% ;
   left: 50%;
   position:absolute;
   transform: translate(-50%,-50%);
   box-sizing:border-box;
   padding: 70px 30px
   }

 




</style> 
</head>
<body>

 <div class="login-box" align="middle">
<img src="avatar.JPEG" alt="avatar" class="avatar">
         

<form  name="myform" method="post" action="process.php" onsubmit="return validateform()">
   
    <p>E-mail:</p> 
   <input type="text" id="email"  name="email" placeholder="Enter Email">
   

  

     <p>Password:</p> 
   <input type="password" id="password"  name="pass" placeholder="Enter Password">
 
     
  
   <p> <input type="SUBMIT" id="btn"   value="Login"/></p>

  <p>New user?<a href="register.php">create account</a><p/>
</form>

</body>
</html>