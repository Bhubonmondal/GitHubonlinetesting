<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'epiz_33297105';
$password = 'sL4ZUUhIUWhRHO';

// Database name is geeksforgeeks
$database = 'epiz_33297105_test';

// Server is localhost with
// port number 3306
$servername='sql303.epizy.com';
$mysqli = new mysqli($servername, $user, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM storeformdata ORDER BY ID DESC 
LIMIT 1;";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Portfolio Website</title>
  <link href="style.css" rel="stylesheet">
  <style>
	h1{
			font-size: 50px;
		}
		a{
		text-decoration: none;
		}
		p{
			font-size: 30px;
			color: blue;
		}
		input[type=text] {
			padding: 0px 0px 0px 0px;
			margin: 0px 8px 0px 2px;
			font-size: 20px;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		input[type=text]:focus {
			border: 3px solid #555;
		}
		input[type=submit]{
			width: 100px;
			height: 30px;
		}
	
	
	@media only screen and (min-width: 600px) {
		input[type=text] {
		padding: 12px 20px;
		margin: 8px 0;
		font-size: 40px;
		box-sizing: border-box;
		border: 3px solid #ccc;
		-webkit-transition: 0.5s;
		transition: 0.5s;
		outline: none;
	}
	p{
		font-size: 60px;
		color: red;
	}
	}
	@media only screen and (min-width: 900px) {
		input[type=text] {
		padding: 12px 20px;
		margin: 8px 0;
		font-size: 20px;
		box-sizing: border-box;
		border: 3px solid #ccc;
		-webkit-transition: 0.5s;
		transition: 0.5s;
		outline: none;
	}
	p{
		font-size: 30px;
		color: red;
	}
	}
  </style>
</head>

<body>
	<?php
		while($rows=$result->fetch_assoc())
			{
	?>
	
	<!-- Navigation Start -->
<!-- Header Start --> 

<center>
	<h1><?php echo $rows['First_name'];?>  
	<?php echo $rows['Last_name'];?></h1>
</center>


			<?php
				}
			?>		 



<form action="insert.php" method="post">
		<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="First_name" id="First_name" placeholder="Iron" width="100px" required >
		</p>

					
		<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="Last_name" id="Last_name" placeholder="Man">
		</p>

			<center>
				<input type="submit" value="Submit">
			</center>
			
	</form>



</body>

</html>
