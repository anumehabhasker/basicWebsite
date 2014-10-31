<?php
			// Create the connection to the database
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "animeha";
			$dbname = "food";
			$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
			
			if(mysqli_connect_errno()){
				die("Database Connection Failed: " . mysqli_connect_error() . "(" . mysqli_connect_errno() . ")");
			}
?>

<html lang="en">
	<head>
		<title>Food Groups Selection- Anumeha Bhasker's project -Current Database Values </title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		
		<?php
			
			// Writing to the database : needs to be relocated
			$query = "SELECT * FROM food_selected";
			$result = mysqli_query($connection,$query);
			//check for any query error
			if(!$result) {
				die("Database query failed: ".mysqli_error($connection));
			}	
			
		?>
	</head>
	<body>
		
			<p>
				<?php
			
					// Reading from the database 
					$query = "SELECT * FROM food_selected";
					$result = mysqli_query($connection,$query);
					//check for any query error
					if(!$result) {
						die("Database query failed: ".mysqli_error($connection));
					}
				?>
				<ul>
					<?php
					while($row=mysqli_fetch_assoc($result))
						{
					?>
					<li> <?php echo $row['food_name']; ?> </li>	
					<?php		
						}
					?>
				</ul>
				<?php
					mysqli_free_result($result);
				?>
			</p>
			<p>
				Would you like to go back to the <a href="project.php"> main page? </a>
			</p>
	</body>
</html>	

<?php 
	mysqli_close($connection);
?>	