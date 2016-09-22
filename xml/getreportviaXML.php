<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2016
    */
    $login = 'user';    // string User ID (phone number)
    $password = 'pass';        // string Password
    $idlist = '00001;00002';
        
    $xml = "<?xml version='1.0' encoding='utf-8'?><request_getstate><username><![CDATA[".$login."]]></username><password><![CDATA[".$password."]]></password><smscid><![CDATA[".$idlist."]]></smscid></request_getstate>";
    ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/xml; charset=utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CRLF, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
    curl_setopt($ch, CURLOPT_URL, 'https://gate.smsclub.mobi/xml/state.php');
    $result = curl_exec($ch);
    echo $result;
?>