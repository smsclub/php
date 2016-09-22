<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2016
    */
    $url = 'https://gate.smsclub.mobi/http/state.php?';
    $username = 'user';    // string User ID (phone number)
    $password = 'pass';        // string Password
    $smscid = '0001'; 
    $url_result = $url.'username='.$username.'&password='.$password.'&smscid='.$smscid;   

    if( $curl = curl_init() ) 
    {
        curl_setopt($curl, CURLOPT_URL, $url_result);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $out = curl_exec($curl);
        echo $out;
        curl_close($curl);
    }
?>