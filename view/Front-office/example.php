<?php
require "smspartnerapi.php";


$smspartner = new SMSPartnerAPI(false);
//check credits
$result = $smspartner->checkCredits('?apiKey=YOUR_API_KEY');


//send SMS
$fields = array(
    "apiKey"=>"YOUR_API_KEY",
    "phoneNumbers"=>"xxxxxxxxxx",
    "message"=>"coucou toi",
    "sender" => "DEMOSMS",
    "scheduledDeliveryDate"=>"21/12/2014",
    "time"=>11,
    "minute"=>0

);
$result = $smspartner->sendSms($fields);


// get delivery
$result = $smspartner->checkStatusByNumber('?apiKey=YOUR_API_KEY&messageId=666&phoneNumber=xxxxxxxxxx');
