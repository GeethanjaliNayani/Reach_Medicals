<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $organization = $_POST["organization"];
    $position = $_POST["position"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    // Change the following email address to your desired email address
    $to = "your@example.com";
    $subject = "Broucher Form submission";
    $message = "Name: $name\nOrganization: $organization\nPosition: $position\nEmail: $email\nMobile: $mobile";

    mail($to, $subject, $message);

    // Send a response back to the client (optional)
    echo "Form submitted successfully!";
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request";
}
?>
