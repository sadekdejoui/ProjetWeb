<?php
session_start();

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require 'vendor/autoload.php';
require '../../controller/user_controller.php';

// Retrieve session variables
$email = $_SESSION['email'];

$tel = "+216" . preg_replace('/[^0-9]/', '', $_SESSION['tel4']);


// Generate a secure token
$token = bin2hex(random_bytes(5));
$msg = "Bonjour, nous avons reçu une demande pour se connecter dans Questeera. Votre jeton : {$token}";

// Infobip configuration
$apiURL = "api.infobip.com";
$apiKey = "d00dd43e1f980cf93566f900237b0630-755ab7bc-f656-46cc-b34f-655274251593";

$configuration = new Configuration(host: $apiURL, apiKey: $apiKey);
$api = new SmsApi(config: $configuration);

// Create destination object
$destination = new SmsDestination(to: $tel);

// Create SMS message
$theMessage = new SmsTextualMessage(
    destinations: [$destination],
    from: "Questerra",
    text: $msg,
    deliveryTimeWindow: null // Optional parameter, set to null if not used
);

// Create and send request
$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);


// Log response for debugging
error_log(print_r($response, true));

// Store token and redirect
$_SESSION['jeton4'] = $token;
header('Location: login2.php');

?>