<?php
$feedback = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // the form data processed
    $to = "your@email.com";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // feedback message to be displayed.
    $feedback = "Thank you! Your message has been sent.";
}
?>

<!-- Display the feedback message on the same page -->
<div class="feedback"><?php echo $feedback; ?></div>
