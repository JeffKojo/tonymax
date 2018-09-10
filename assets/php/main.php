<?php

	if (isset($_POST['name']) && isset($_POST['email']) && isset('message')) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = 'marktee94@gmail.com';

		$subject = $name

		mail($to, $subject, $message);
	}

?>