<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Telegram Bot Token and Channel ID
    $botToken = "7805345752:AAEMCVnt-uMuldquEFm0-9QD6JLCYHOiNHs";
    $chatId = "-1002361653389"; // Ensure the bot has permission to post in the channel

    // Message to send
    $text = "New Contact Form Submission:\n\n";
    $text .= "Name: " . $name . "\n";
    $text .= "Email: " . $email . "\n";
    $text .= "Message: " . $message;

    // Send data to Telegram channel
    $url = "https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatId&text=" . urlencode($text);

    // Make the request
    $response = file_get_contents($url);

    if ($response) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
