<?php

/**
 * This example demonstrates how to get status sms viber via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */
 
        $token = 'your_bearer_token';
        $url = 'https://im.smsclub.mobi/vibers/send';

        $data = json_encode([
            'messageIds' => ['5769','5770']
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


        if(curl_errno($ch)){
            echo curl_error($ch);
            exit;
        }else{
            curl_close($ch);
        }


        $data = json_decode($result,true);


        echo '<pre>'.print_r($data, true).'</pre>';
