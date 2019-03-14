<?php
if (isset($_POST['submit'])) {
    $to = "officialdiscrete@gmail.com"; // this is your Email address
    $first_name = $_POST['email'];
    $subject = "NewsFeed Subscribed";
    $subject2 = "Add to mailing List";
    $message = $first_name . " "  . " wrote the following:" . "\n\n";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    header('Location: index.html');
}
?>