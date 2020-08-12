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
        
        <a href="view_students.php">    <span>Students</span></a>      
        <a href="view_Attendence.php">     <span>Attendance</span></a>  
       
   </div>
  <!--sidebar end-->
   <div class="content">
   <div class="btn_group">
        <br>
        <br>
        <br>
       <form method="POST" action="fetch_attendance.php" class="lolo">
       <h2>Fill the Details below to view Students Attendance </h2>   
       <h4>Choose Subject:</h4>           
           <br>
           <br>
           <select name='subject'>
             <option value=''></option>
             <option value='Math'>Mathematics</option>
             <option value='English'>English</option>
                 <option value='kiswahili'>kiswahili</option>
                 <option value='Biology'>Biology</option>
                 <option value='Chemistry'>Chemistry</option>
                 <option value='Physics'>Physics</option>
                 <option value='Geography'>Geography</option>
                 <option value='Civics'>Civics</option>
                 <option value='History'>History</option>

              </select></td>
              <br>
              <br>
              <br>
              <hr>
           <h4>Date:</h4>
           <input type="date" name="date">
            <br>
            <br>
            <br>
           <hr>
            <h4>Choose Class:</h4>
               <br>
               <br>
           <select name="class">
					<option value=""></option>
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
           <hr>
           <br>
           <input type="submit" name="sub"   class="juju" value="View Attendance">
           <br>
           <br>
           
           
           
           <a href="addchoice_attendance.php"  class="btn btn_big" id="add">Add Attendance</a>
       </form>
    </div>

    <?php
include ('connection.php');
session_start();         
     

     
      //Mysql select query
      $query = " SELECT  * FROM  attendance    WHERE date='02/08/2020' ";
         
      
      if ($result = mysqli_query($mysql_obj,$query)) {
            if (mysqli_num_rows($result) > 0) {
              echo " ATTENDANCE  ";  
              echo "<table>"; 
              echo "<tr>";  
             echo "<th>DATE </th>";  
             echo "<th>ID   </th>";
             echo "<th>FIRST NAME   </th>";
             echo "<th>LAST NAME    </th>";
             echo "<th>SUBJECT </th>";
             echo "<th>STATUS    </th>";
             echo "<th>COMMENTS   </th>";
             echo "<th>TIME     </th>";
             while ($row = $result->fetch_assoc()){
             echo "<tr>";
             echo "<td>" . $row['date']. "</td>";
             echo "<td>" . $row['id']. "</td>";
             echo "<td>" .  $row['firstname']. "</td>";
             echo "<td>" . $row['lastname'].  "</td>";
             echo "<td>" . $row['subject']. "</td>";
             echo "<td>" . $row['status'] ."</td>";
             echo "<td>" . $row['comment'] . "</td>";
             echo "<td>" .  $dbname . "</td>";
            
           }
            }
        }
        $mysql_obj->close();
       
        ?>

           

 </div>


</body>
</html>