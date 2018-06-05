<? php
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'letter2srm@gmail.com';
	$email_subject = "Visitors's Note for MidnightScribblings Blog";
	$email_body = "User Name: $name  \n".
					"User Email: $visitor_email \n".
					"User Message: $message \n";

	$to = "postboxno.7@outlook.com";
	$headers = "From: $email_from \r\n";
	$headers = "Reply-To: $visitor_email \r\n";

	mail($to, $email_subject, $email_body, $headers);
	header("Loction : index.html");
?>