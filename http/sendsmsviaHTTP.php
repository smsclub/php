<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2016
    */
    $url = 'https://gate.smsclub.mobi/http/?';
    $username = 'user';    // string User ID (phone number)
    $password = 'pass';        // string Password
    $from = 'SMS CLUB';        // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
    $to = '0997777646';
    $text = urlencode('СМС через HTTP-шлюз от SMS CLUB');       // string Message
    $url_result = $url.'username='.$username.'&password='.$password.'&from='.urlencode($from).'&to='.$to.'&text='.$text;
    
    if( $curl = curl_init() ) 
    {
        curl_setopt($curl, CURLOPT_URL, $url_result);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }
?>