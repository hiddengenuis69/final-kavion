<?php
	if (isset($_POST['submit'])) {
	  insert();
	}


	function insert(){
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$dbname = "dahype";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "INSERT INTO dahype.contact ( email, message )
			VALUES ('"  . $_POST['email'] .   "', '"    . $_POST['msg'] . "')";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>
