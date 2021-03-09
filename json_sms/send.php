<?php

/**
 * This example demonstrates how to send sms via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */

$token = 'vRpHChl3YDut_KN';
$url = 'https://im.misha.dev.smsclub.mobi/sms/send';

$data = json_encode([
    'phone' => ['380990244671'],
    'message' => 'Test test',
    'src_addr' => 'Shop Zakaz'
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
