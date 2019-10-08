<?php
  
  $conn_error="could not connected";
  $host='localhost';
  $user='root';
  $pass='';
  $db='quizdb';

  $conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
  //echo "connected";
  mysqli_select_db($conn,$db) or die ($conn_error);
 // echo "connected";

  if(isset($_POST['reg_btn'])){
     $first_name=$_POST['first_name'];
     $last_name=$_POST['last_name'];
     $u_name=$_POST['u_name'];
     $email=$_POST['email'];
     $contact_no=$_POST['contact_no'];
     $new_password=$_POST['new_password'];
     $retype_password=$_POST['retype_password'];

     $s="select * from quiztb where u_name='$u_name'";
     $result=mysqli_query($conn,$s);
     $num=mysqli_num_rows($result);

     if($num == 1){
      echo'<script type="text/javaScript">';
echo'alert("Username Already Taken")';
echo'</script>';
      
     }

     elseif($new_password != $retype_password){
       echo'<script type="text/javaScript">';
echo'alert("Two password do not matched")';
echo'</script>';
  
     }else{

     $query="insert into quiztb(first_name, last_name, u_name, email, contact_no, new_password, retype_password) values ('$first_name', '$last_name', '$u_name', '$email', '$contact_no', '$new_password', '$retype_password')";

     mysqli_query($conn,$query);
      header('location:regist2.php');

     }
  }
  ?>





<html>
  <head>
     <title>Redistration Form</title>
     <link rel="stylesheet" type="text/css" href="stylereg.css">
  </head>
  <body>
<div class="container">
  <div class="login-box"> 
    <h2>Register Here</h2> 
    <form method="POST" action="registq.php"> 
      <div class="form_input">
        <p>First Name</p>
        <input type="text" name="first_name" required="*" placeholder="Enter Your First name..."/>
      </div>
      <div class="form_input">
        <p>Last Name</p> 
        <input type="text" name="last_name" required="*" placeholder="Enter Your  Last Name..."/>
      </div>
      <div class="form_input">
        <p>User Name</p> 
        <input type="text" name="u_name" required="*" placeholder="Enter Your user name..."/>
      </div>
      <div class="form_input">
        <p>E-mail Address</p> 
        <input type="text" name="email" required="*" placeholder="Enter Your  E-mail address..."/>
      </div>
      <div class="form_input">
        <p>Contact Number</p> 
        <input type="text" name="contact_no" required="*" placeholder="Enter Your  contact number..."/>
      </div>
      <div class="form_input">
        <p>Password</p> 
        <input type="password" name="new_password" required="*" placeholder="Enter Your Password..."/>
      </div>
      <div class="form_input">
        <p>Retype Password </p>
        <input type="Password" name="retype_password" required="*" placeholder="Retype Password..."/>
      </br></div>
      <center><input type="submit" name="reg_btn" value="SUBMIT" /></center>
      
    </form> </div></div> 
  </body>
  </html>






