
<?php
include('connection.php');
if(isset($_POST["sub"])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['pass'];

 $sql = "insert INTO students (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')";
 
if ($mysql_obj->query($sql)===TRUE) {
    echo "<script> alert9('Congratulations your registered successfully')</script> ";
   echo "<script> window.open('index.php')</script>";
}
   else { 
    echo "Error:" ;
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

.login-box input[type="submit"] {
     
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
        background: url(img6.JFIF);
        background-size: cover;
        font-family:sans-serif;
       font-weight: bold;
}

  
   
 .login-box{
   widith:300px ;
   height: 580px;
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
<form name="myform" method="POST" action=""">
<div class="login-box" align="middle">

  
<img src="avatar.JPEG" alt="avatar" class="avatar">

      <p>First Name:</p>      
      <input type="text" id="firstname"  onkeyup=" validate();"   name="firstname"  placeholder="Enter FirstName"/>
       <div id="errFirst">  </div>
    
        <div id="errLast"> 
   <p>Last Name:</p>        
   <input type="text" id="lastname"  onkeyup=" validate();"  name="lastname"   placeholder="Enter LastName">
         </div>
   
         <div id="errEmail">
     <p>E-mail:</p>      
   <input type="text" id="email"  onkeyup=" validate();"  name="email"   placeholder="Enter Email">
         </div>

        <div id="errPassword">
     <p>Password:</p>       
   <input type="password" id="password" onkeyup=" validate();"   name="pass"   placeholder="Enter Password">
        </div>

      <div id="errPassword2">
 <p>Confirm Password:</p>         
   <input type="password" id="password2" onkeyup=" validate();"   name="pswd2"   placeholder="Enter Password">
        </div>
    <p> Gender :</p>
 
 <p><input type="radio" id="male "  name="gender" value="male"/>Male  <input type="radio" id="female"  name="gender" value="female"/>Female</p>
    

      <div id="errConfirm">
   <p> <input type="submit" id="sub" name="sub" onclick=" validate(); finalValidate();" value="Register"/></p>
    </div id="errFinal">
</div>
</form>

<script type="text/javascript">
    var divs = new Array();
    divs[0] = "errFirst";
    divs[1] = "errLast";
    divs[2] = "errEmail";
    divs[3] = "errPassword";
    divs[4] = "errPassword2";
    function validate()
	{
      var inputs = new Array();
      inputs[0] = document.getElementById('firstname').value;
      inputs[1] = document.getElementById('lasamet').value;
      inputs[2] = document.getElementById('email').value;
      inputs[3] = document.getElementById('password').value;
      inputs[4] = document.getElementById('password2').value;
      var errors = new Array();
      errors[0] = "<span style='color:red'>Please enter your first name!</span>";
      errors[1] = "<span style='color:red'>Please enter your last name!</span>";
      errors[2] = "<span style='color:red'>Please enter your email!</span>";
      errors[3] = "<span style='color:red'>Please enter your password!</span>";
      errors[4] = "<span style='color:red'>Please confirm your password!</span>";
      for (i in inputs)
      {
        var errMessage = errors[i];
        var div = divs[i];
        if (inputs[i] == "")
        	document.getElementById(div).innerHTML = errMessage;
        else if (i==2)
        {
          var atpos=inputs[i].indexOf("@");
          var dotpos=inputs[i].lastIndexOf(".");
          if (atpos<1 || dotpos<atpos+2 || dotpos+2>=inputs[i].length)
        	document.getElementById('errEmail').innerHTML = "<span style='color: red'>Enter a valid email address!</span>";
          else
        	document.getElementById(div).innerHTML = "OK!";
        }
        else if (i==4)
        {
          var first = document.getElementById('password').value;
          var second = document.getElementById('password2').value;
          if (second != first)
        	document.getElementById('errPassword2').innerHTML = "<span style='color: red'>Your passwords don't match!</span>";
          else
       		document.getElementById(div).innerHTML = "OK!";
        }
        else
        	document.getElementById(div).innerHTML = "OK!";
       }
     }
        function finalValidate()
        {
          var count = 0;
          for(i=0;i<5;i++)
          {
            var div = divs[i];
            if(document.getElementById(div).innerHTML == "OK!")
            count = count + 1;
          }
          if(count == 5)
          	document.getElementById("errFinal").innerHTML = "All the data you entered is correct!!!";
        }
   </script>
</body>
