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
		<title>Food Groups Selection- Anumeha Bhasker's project -Page 2 </title>
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		
		<?php
			$selection = $_GET['id'];;
			// Writing to the database : needs to be relocated
			$query = "INSERT INTO food_selected VALUES ('{$selection}');";
			$result = mysqli_query($connection,$query);
			//check for any query error
			if(!$result) {
				die("Database query failed: ".mysqli_error($connection));
			}	
			
		?>
	</head>
	<body>
		
			<p>
				Thank you for choosing <?php echo $selection."!"?>
				<br> <br/>
				
				Would you like to <a href="project.php"> choose again? </a>
			</p>
	</body>
</html>	

<?php 
	mysqli_close($connection);
?>	