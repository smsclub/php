<?php


/**
 * This example demonstrates how to send personal sms via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */
 
 
       $token = 'your_bearer_token';
       $url = 'https://im.smsclub.mobi/v2/sms/send';

       $data = json_encode([
           'src_addr' => 'VashZakaz',
           'data_message' => [
               [
                   'phone' => '0980000001',
                   'message' => 'test 1'
               ],
               [
                   'phone' => '0980000002',
                   'message' => 'test 2'
               ],
           ]
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


       $data = json_decode($result,true);

       curl_close($ch);

       echo '<pre>'.print_r($data, true).'</pre>';

