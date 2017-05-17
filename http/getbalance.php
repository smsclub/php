<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2017
    */
    $url = 'https://gate.smsclub.mobi/http/getbalance.php?';
    $username = 'user';    // string User ID (phone number)
    $password = 'pass';        // string Password
    
    $url_result = $url.'username='.$username.'&password='.$password;   

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