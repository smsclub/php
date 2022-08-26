<?php


/**
 * This example demonstrates how to register alpha name via JSON API
 *
 * @url smsclub.mobi
 * @author SMS CLUB
 */

        $token = 'your_bearer_token';
        $url = 'https://im.smsclub.mobi/originators/registration-originators';

        $data = json_encode([
            'sender_id' => 'test_an',
            'company_type' => 'fop',
            'company' => 'My Company',
            'inn' => '1234567',
            'okpo' => '',
            'subject' => 'Информирование постоянных клиентов об акциях, событиях, новых поступлениях, скидках.',
            'description' => 'Магазин бытовой техники',
            'site' => 'https://magazin.com',
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
