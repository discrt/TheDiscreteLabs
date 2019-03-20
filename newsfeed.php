<?php
if (isset($_POST['submit'])) {
    $to = "officialdiscrete@gmail.com";
    $first_name = $_POST['email'];
    $subject = "NewsFeed Subscribed";
    $subject2 = "Add to mailing List";
    $message = $first_name . " "  . " wrote the following:" . "\n\n";
   $headers = "From: Contact Form <info@thediscretelabs.com>" . "\r\n" .
			"Reply-To: $first_name" . "\r\n" .
			"MIME-Version: 1.0\r\n" .
			"Content-Type: text/html; charset=iso-8859-1\n";
    if(mail($to, $subject, $message, $headers))
    {
        header('Location: index.html');
    }
    else {
        echo "Someone is trying to hack you ! Stay safe !";
    }
}
?>