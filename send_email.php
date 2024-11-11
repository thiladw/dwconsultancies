<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $project_name = $_POST['project_name'];
    $project_details = $_POST['project'];

    $to = "info@dwconsultancies.com";  // Your email address
    $subject = "Project Quote Request: " . $project_name;
    $message = "
    Name: $name\n
    Email: $email\n
    Phone: $phone\n
    Project Name: $project_name\n
    Project Details:\n$project_details
    ";

    $headers = "From: no-reply@dwconsultancies.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your inquiry. We will get back to you soon!";
    } else {
        echo "There was a problem sending your message. Please try again later.";
    }
}
?>