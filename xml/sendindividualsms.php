<?php
    /*
     @author SMS CLUB 
     @url www.smsclub.mobi
     @copyright 2016
    */
    $login = 'user';    // string User ID (phone number)
    $password = 'pass';        // string Password
    $alphaName = 'SMS CLUB';        // string, sender id (alpha-name) (as long as your alpha-name is not spelled out, it is necessary to use it)
    $abonent1 = '0997777662';
    $text1 = 'СМС через XML-шлюз от SMS CLUB';
    
    $abonent2 = '0675126767';
    $text2 = 'SMS via XML-gateway from SMS CLUB';
    
    $xml = "<?xml version='1.0' encoding='utf-8'?><request_sendsms><username><![CDATA[".$login."]]></username><password><![CDATA[".$password."]]></password><from><![CDATA[".$alphaName."]]></from><to><![CDATA[".$abonent1."]]></to><text><![CDATA[".$text1."]]></text><to><![CDATA[".$abonent2."]]></to><text><![CDATA[".$text2."]]></text></request_sendsms>";    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: text/xml; charset=utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CRLF, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);
    curl_setopt($ch, CURLOPT_URL, 'https://gate.smsclub.mobi/xml/individual.php');
    $result = curl_exec($ch);
    curl_close($ch);
    echo $result;
?>