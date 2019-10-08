<!DOCTYPE html>
 <html lang="en">
 <head>
	 <meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <meta http-equiv="X-UA-Compatible" content="ie=edge">
	 <title>Document</title>
 </head>
 <body>
 	<p><center><b><div class=topic>
		 The cricket Online Quiz
		</div></b></center></p>
    <p><center>
		<div class=header>You have to select only one out of 4.Best of luck.
		</div></center></p>

	<form action="result.php" method="POST">
	  
	  <?php
 		$q = "SELECT * FROM questions ORDER BY rand() limit 5"; 
		$x=1;
		$query = mysqli_query($conn,$q);
		while ($rows = mysqli_fetch_array($query)) {
		?>

	<b><?php
		 echo $x;
		?></b>
	
	

	<b><?php 
			echo $rows['question'] 
	?></b>
	
	<?php
		$q = "SELECT * FROM answers WHERE ans_id='{$rows['qid']}' order by rand()"; 
		$query1 = mysqli_query($conn, $q);
		$x++;
		while ($rows = mysqli_fetch_array($query1)) { 
	?>
		<div class="card-body">
			<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid']; ?>">
			<?php 
				echo $rows['answer']; 
			
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
   
	 
 </body>
 </html>