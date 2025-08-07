<?php
// Ganti ini dengan alamat email tujuan
$receiving_email_address = 'Smatunasharapanadm@gmail.com';

// Ambil data dari form
$name    = htmlspecialchars($_POST['name']);
$email   = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$subject = htmlspecialchars($_POST['subject']);
$message = htmlspecialchars($_POST['message']);

// Validasi data
if (!$email || empty($name) || empty($subject) || empty($message)) {
    http_response_code(400);
    echo "Please complete the form correctly.";
    exit;
}

// Format pesan email
$headers  = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

$body  = "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Subject: $subject\n\n";
$body .= "Message:\n$message\n";

// Kirim email
if (mail($receiving_email_address, $subject, $body, $headers)) {
    echo "Your message has been sent. Thank you!";
} else {
    http_response_code(500);
    echo "Failed to send message. Please try again later.";
}
?>
