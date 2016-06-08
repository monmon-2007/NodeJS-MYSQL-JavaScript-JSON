<html>
<head>
<title>My first PHP page</title>

</head>
<body>

	<?php
	$servername = "www.db4free.net";
	$username = "monmon_2007";
	$password = "marina_zoom";

	// Create connection
	$conn = new mysqli($servername, $username, $password);

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	?>

</body>
</html>
