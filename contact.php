<?php
if (isset($_POST['submit'])) {
    $to = "officialdiscrete@gmail.com";
    $from = $_POST['email'];
    $first_name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    if(mail($to, $subject, $message, $headers))
    {
        header('Location: index.html');
    } else {
        echo "Error: Message not accepted";
    }
    mail($from, $subject2, $message2, $headers2);
    //header('Location: index.html');
}
?>