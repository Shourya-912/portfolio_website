<?php
$feedback = ""; // Initialize an empty feedback message.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Process the form data here (e.g., sending an email).

    // Set a feedback message to be displayed to the user.
    $feedback = "Thank you! Your message has been sent.";
}
?>

<!-- Display the feedback message on the same page -->
<div class="feedback"><?php echo $feedback; ?></div>