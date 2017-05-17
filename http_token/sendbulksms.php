<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2017
    */
    $url = 'https://gate.smsclub.mobi/token/?';
    $username = 'login';    // string User ID (phone number)
    $token = 'token';        // string token
    $from = 'gsm1';        // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
    $to = '380997777662;380675126767';
    $text = iconv('utf-8','windows-1251', 'Массовая СМС через HTTP-шлюз от SMS CLUB');
    $text = urlencode($text);
    $url_result = $url.'username='.$username.'&token='.$token.'&from='.urlencode($from).'&to='.$to.'&text='.$text;
    
    if($curl = curl_init()) 
    {
        curl_setopt($curl, CURLOPT_URL, $url_result);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }
?>