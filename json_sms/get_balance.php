<?php

/**
 * This example demonstrates how to get user's balance via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */

$token = 'vRpHChl3YDut_KN';
$url = 'https://im.misha.dev.smsclub.mobi/sms/balance';

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_URL => $url,
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
