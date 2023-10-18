<?php
$feedback = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // the form data processed
    $to = "shourchourasia.912@gmail.com";
    $headers = "From: $email";

    mail($to, $name, $subject, $message, $headers);

    // feedback message to be displayed.
    $feedback = "Thank you! Your message has been sent.";
}
?>

<!-- Display the feedback message on the same page -->
<div class="feedback"><?php echo $feedback; ?></div>
