<?php

/**
 * This example demonstrates how to send sms via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */

$token = 'your_bearer_token';
$url = 'https://im.smsclub.mobi/sms/send';

$data = json_encode([
    'phone' => ['380938226388'],
    'message' => 'Your message',
    'src_addr' => 'SenderName'
]);

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        'Authorization: Bearer ' . $token,
        'Content-Type: application/json'
    ]
]);

$result = curl_exec($ch);
echo $result;

curl_close($ch);
