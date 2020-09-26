<?php

require_once('functions.php');
require_once ('config.php');

session_start();

// Basic check to make sure the form was submitted.
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    redirectWithError("The form must be submitted with POST data.");
}

// Do some validation, check to make sure the name, email and message are valid.

if (empty($_POST['name'])) {
    redirectWithError("Please enter your name in the form.");
}

if (empty($_POST['mail'])) {
    redirectWithError("Please enter your email address in the form.");
}

if (empty($_POST['message'])) {
    redirectWithError("Please enter your message in the form.");
}

if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    redirectWithError("Please enter a valid email address.");
}

if (strlen($_POST['message']) < 10) {
    redirectWithError("Please enter at least 10 characters in the message field.");
}

// Everything seems OK, time to send the email.

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
    $mail->isSMTP();
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    // Recipients
    $mail->setFrom(CONTACTFORM_FROM_ADDRESS, CONTACTFORM_FROM_NAME);
    $mail->addAddress(CONTACTFORM_TO_ADDRESS, CONTACTFORM_TO_NAME);
    $mail->addReplyTo($_POST['mail'], $_POST['name']);

    // Content
    $mail->Subject = "[Contact Form] New Form Submission";
    $mail->Body    = <<<EOT
Name: {$_POST['name']}
Email: {$_POST['mail']}

-------------------------------
{$_POST['message']}
EOT;

    $mail->send();
    redirectSuccess();
} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}
