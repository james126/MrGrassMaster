<!DOCTYPE html>
<html>
<body>

<?php
$curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://be.trustifi.com/api/i/v1/email",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n  \"recipients\": [{\"email\": \"mrjameseason@gmail.com\", \"name\": \"James Eason\",
          \"phone\":{\"country_code\":\"+64\",\"phone_number\":\"0211397315\"}}],\n  \"lists\": [],
          \n  \"contacts\": [],\n  \"attachments\": [],\n  \"title\": \"Title\",\n  \"html\": \"Body\",
          \n  \"methods\": { \n    \"postmark\": false,\n    \"secureSend\": false,\n    \"encryptContent\": false,
          \n    \"secureReply\": false \n  }\n}",
      CURLOPT_HTTPHEADER => array(
        "x-trustifi-key: {{fca0f137011d6ec201ee63ec0f494310c664f2cdcec6e81f}}",
        "x-trustifi-secret: {{a2e9724da357b0661e675da068b92529}}",
        "Content-Type: application/json"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
 ?>

</body>
</html>
