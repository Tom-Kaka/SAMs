

<?php
include('connection.php');
if(isset($_POST["sub"])){
$name=$_POST['name'];
$age=$_POST['age'];
$addr=$_POST['addr'];
$position=$_POST['pst'];
$username=$_POST['user'];
$pass=$_POST['pswd'];

$insert="insert into staff(fullname,age,address,position,username,password)values('$name','$age','$addr','$position','$username','$pass')";
$query=mysql_query($insert);
if($query){
echo "<script> alert('congratulation staff is registered successful')</script>";
echo "<script>window.open('index.php')</script>";
}


}

?>

<html>
<head>
<title>register page</title>

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
   height: 600px;
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
<form name="loginform" method="post" action="">
  <div class="login-box" align="middle">
<img src="avatar.JPEG" alt="avatar" class="avatar">
         
   <p>First Name:</p>  
   <input type="text" id="firstname"  name="name" placeholder="Enter FirstName">
   

   <p>Last Name:</p> 
   <input type="text" id="lastname"  name="name2" placeholder="Enter LastName">
   
   
    <p>E-mail:</p> 
   <input type="text" id="email"  name="email" placeholder="Enter Email">
   

  

     <p>Password:</p> 
   <input type="password" id="password"  name="pass" placeholder="Enter Password">
    <p>Confirm Password:</p>
   <input type="password" id="password2" name="pass2" placeholder="Enter Password">

    
 <p> Who are you? <input type="radio" id="stu " name="CHOICE" value="student"/>Student   <input type="radio" id="staf"  name="CHOICE" value="staff"/>Staff </p>
    
<p>Gender: <input type="radio" id="male" name="sex" value="male" /> Male <input type="radio" id="female" name="sex" value="female" /> Female
     
  
   <p> <input type="SUBMIT" id="btn"   value="Register"/></p>
</form>


</div>
</body>
</html>