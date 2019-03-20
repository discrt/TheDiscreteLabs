<?php
if (isset($_POST['submit'])) {
    $to = "officialdiscrete@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $_POST['message'];
    $emailBody = "
	<html>
	<head>
		<title>$subject</title>
	</head>
	<body style=\"background-color:#fafafa;\">
		<div style=\"padding:20px;\">
			Name: <span style=\"color:#888\">$first_name</span>
			<br>
			Email: <span style=\"color:#888\">$from</span>
			<br>
			Message: <div style=\"color:#888\">$message</div>
		</div>
	</body>
	</html>
";
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $message;

    $headers = "From: Contact Form <info@thediscretelabs.cm>" . "\r\n" .
        "Reply-To: $from" . "\r\n" .
        "MIME-Version: 1.0\r\n" .
        "Content-Type: text/html; charset=iso-8859-1\n";

    $headers2 = "From: Contact Form <info@thediscretelabs.cm>" . "\r\n" .
        "Reply-To: $to" . "\r\n" .
        "MIME-Version: 1.0\r\n" .
        "Content-Type: text/html; charset=iso-8859-1\n";

    if(mail($to, $subject, $emailBody, $headers))
    {
        header('Location: index.html');
    } else {
        echo "Error: Message not accepted";
    }
    mail($from, $subject2, $message2, $headers2);
    //header('Location: index.html');
}
?>