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
<!DOCTYPE html>
<html>
<head>
	
</head>
<body>

<h1 class="text-white">Result</h1>
	
<?php 

$result = 0;
if (isset($_POST['submit'])) {
if (!empty($_POST['quizcheck'])) {
$count = count($_POST['quizcheck']);

?>
	
		<?php 
			 echo "Out of 5,  You have selected " . $count . " options";
			 echo "<br>";
			 echo "<br>";
		 ?>
	

		<?php 
			$selected = $_POST['quizcheck'];
			$q = "select * from questions";
			$query = mysqli_query($conn, $q);
			$i = 1;
			while($rows = mysqli_fetch_array($query)) {

			$checked = $rows['ans_id'] == $selected[$i];
			if ($checked) {
			$result++;
			}else{

				 }
			 		$i++;
					
				}
		?>


		<?php 
			echo "Your score is ".$result ;
			echo "<br>";
			echo "<br>";
			}
			else{
				echo "<b>Please Select Atleast One Option.</b>";
				}
				 
				}
				?>

		


	<b><a href="loginq.php">LOGOUT</a></b></p>
	</div>
</body>
</html>