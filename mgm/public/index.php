<!DOCTYPE html>
<html>
<body>

<?php
    $client = new http\Client;
    $request = new http\Client\Request;
    $request->setRequestUrl('https://be.trustifi.com/api/i/v1/email');
    $request->setRequestMethod('POST');
    $body = new http\Message\Body;
    $body->append('{
      "recipients": [{"email": "mrjameseason@gmail.com", "name": "test", "phone":{"country_code":"+1","phone_number":"1111111111"}}],
      "lists": [],
      "contacts": [],
      "attachments": [],
      "title": "Title",
      "html": "Body",
      "methods": {
        "postmark": false,
        "secureSend": false,
        "encryptContent": false,
        "secureReply": false
      }
    }');
    $request->setBody($body);
    $request->setOptions(array());
    $request->setHeaders(array(
      'x-trustifi-key' => '{{fca0f137011d6ec201ee63ec0f494310c664f2cdcec6e81f}}',
      'x-trustifi-secret' => '{{a2e9724da357b0661e675da068b92529}}',
      'Content-Type' => 'application/json'
    ));
    $client->enqueue($request)->send();
    $response = $client->getResponse();
    echo $response->getBody();


 ?>

</body>
</html>
