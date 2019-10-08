<?php
 session_start();

$conn_error="Could not Connected";
$host='localhost';
$user='root';
$pass='';
$db='quizdb';

$conn=mysqli_connect($host,$user,$pass) or die ($conn_error);
mysqli_select_db($conn,$db) or die ($conn_error);

if(isset($_POST['u_name'])){
  $u_name = $_POST['u_name'];
  $new_password = $_POST['new_password'];
  $mysql_error="fail";

 

  $result = mysqli_query($conn,"select * from  quiztb where u_name='$u_name' && new_password='$new_password' ") or die ("Failed to query database".$mysql_error);

$row=mysqli_fetch_array($result);

if($row["u_name"] ==$u_name && $row["new_password"] ==$new_password){
	//echo"login success";
	header('location:newquiz.php');
}else
{
echo'<script type="text/javaScript">';
echo'alert("Wrong username/password combination")';
echo'</script>';
	
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="stylelog.css">
</head>
<body>
	<div class="container">
		<img src="images\2-512.png" class="user1">
		
			<h2>Log In Here</h2>
		<form method="POST" action="loginq.php">
			<div class="form_input">
			
			<p>User Name:</p>
			 <input type="text" name="u_name" placeholder="Enter Your User Name..." required><br>
		</div>
		<div class="form_input">
			<p>Password:</p>
			<input type="password" name="new_password" placeholder="Enter Your Password..." required>
		</div>
		<div class="login-box">
			<input type="submit" name="submit" value="LOGIN" id="btn">
		</div>
			<p><font size="4"><b>New User please </b><a href="registq.php"><b>register here</b></a></font></p>
			
	       </form>
	
</div>
</body>
</html>