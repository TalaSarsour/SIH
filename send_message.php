<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];
    $timestamp = $_POST['timestamp'];

    $data = json_encode([
        'message' => $message,
        'timestamp' => $timestamp
    ]);

    $url = 'https://sih-social-investment-hub-ps-default-rtdb.firebaseio.com/messages.json';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $response = curl_exec($ch);
    curl_close($ch);

    echo $response;
}
?>