<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("sql303.epizy.com", "epiz_33297105", "sL4ZUUhIUWhRHO", "epiz_33297105_test");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all from the form data(input)
		//$ID = $_REQUEST['ID'];
		$First_name = $_REQUEST['First_name'];
		$Last_name = $_REQUEST['Last_name'];
		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO storeformdata VALUES ('','$First_name','$Last_name')";
		
		if(mysqli_query($conn, $sql)){
			//echo "<h3>Thank you for submiting🤗</h3>";
			header('location: http://bhubon.great-site.net/index.php');
                	die;

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
