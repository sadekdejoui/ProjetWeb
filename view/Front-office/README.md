# sdk-php

```
<?php
require "smspartnerapi.php";
```


###### check credits
```
$smspartner = new SMSPartnerAPI();
$result = $smspartner->checkCredits('?apiKey=YOUR_API_KEY');
```

###### send SMS
```
$smspartner = new SMSPartnerAPI();
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
```

###### get delivery
```
$smspartner = new SMSPartnerAPI();
$result = $smspartner->checkStatusByNumber('?apiKey=YOUR_API_KEY&messageId=666&phoneNumber=xxxxxxxxxx');
```

For more information on how to use the SMSPartner API, check out the SMSPartner [API doc](https://my.smspartner.fr/documentation-fr/api/v1).

