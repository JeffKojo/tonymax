<?php
require 'db.php';
session_start();

	if (isset($_POST['name_pack']) && isset($_POST['email_pack']) && isset($_POST['gender']) && isset($_POST['package'])) {
		$name_pack = $mysqli->escape_string($_POST['name_pack']);
		$email_pack = $mysqli->escape_string($_POST['email_pack']);
		$gender = $mysqli->escape_string($_POST['gender']);
		$package = $mysqli->escape_string($_POST['package']);

		$sql = "INSERT INTO messages (name_pack, email_pack, gender, package) VALUES ('$name_pack', '$email_pack', '$gender', '$package')";

		if ($result = $mysqli->query($sql)) {
			$_SESSION['message'] = "You registered has been registered successfully";
			header("Location: success.php");

		} else {
			$_SESSION['message'] = "There was an error registering your package";
			header("Location: error.php");
		} 
	}