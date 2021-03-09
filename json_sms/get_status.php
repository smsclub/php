<?php

/**
 * This example demonstrates how to get sms status via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */

$token = 'your_bearer_token';
$url = 'https://im.smsclub.mobi/sms/status';

$data = json_encode([
    'id_sms' => ['803253430'],
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
