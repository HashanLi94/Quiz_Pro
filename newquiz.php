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
  ?> 
<html>
	<head>
	<title>Quiz</title>
	<link rel="stylesheet" href="quizstyle.css">
</head>
<body>
	<p><center><b><div class=topic>The cricket Online Quiz</div></b></center></p>
    <p><center><div class=header>Let's Cricket.</div></center></p>
   

</body>
</html>




<form action="result.php" method="POST">
  <?php
 
	$q = "SELECT * FROM questions ORDER BY rand() limit 5"; 
	$x=1;
	$query = mysqli_query($conn,$q);
	while ($rows = mysqli_fetch_array($query)) {
		?>

<b><?php echo $x;
?></b>
	
	

	<b><?php echo $rows['question'] ?></b>
	
	<?php
	$q = "SELECT * FROM answers WHERE ans_id='{$rows['qid']}' order by rand()"; 
	$query1 = mysqli_query($conn, $q);
	$x++;
	while ($rows = mysqli_fetch_array($query1)) { 
		?>
		<div class="card-body">
			<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
			<?php echo $rows['answer']; 
			
			?>
		</div>

	<?php  
} 
}
 ?>
 </div>

 
 <input  type="submit" name="submit" value="Submit" >
 <a href="result.php">



 
 </form>
 
 