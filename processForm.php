<?php
$feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // The form data processed
    $to = "shourchourasia.912@gmail.com";
    $subject = "Message from $name: $subject";
    $headers = "From: $email";

    $mailSent = mail($to, $subject, $message, $headers);

    if ($mailSent) {
        $feedback = "Thank you! Your message has been sent.";
    } else {
        $feedback = "Oops! Something went wrong. Please try again later.";
    }
}
?>

<!-- Display the feedback message on the same page -->
<div class="feedback"><?php echo $feedback; ?></div>

