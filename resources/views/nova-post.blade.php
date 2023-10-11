<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nova Post</title>
</head>
<body>
<h3>Result</h3>
<br>
<?php

use LisDev\Delivery\NovaPoshtaApi2;

$np = new NovaPoshtaApi2('');
var_dump($np);
//$sender_city = $np->getCity('Белгород-Днестровский', 'Одесская');
//$result = $np->model('Address')->method('getCities')->params(array())->execute();
//echo $result;
//var_dump($sender_city);
/*$r = new HttpRequest("https://api.novaposhta.ua/v2.0/json/", HttpRequest::METH_POST);
$r->addHeaders(array('Content-Type' => 'application/json'));
$r->setBody('{"apiKey": "", "modelName": "Address", "calledMethod": "getCities", "methodProperties": {"Page" : "1", "Limit" : "20"}}');
echo $r->send()->getBody();*/

/*$url = 'https://api.novaposhta.ua/v2.0/json/';
$ch = curl_init($url);
$data = array("apiKey" => "",
    "modelName" => "Address",
    "calledMethod" => "getCities",
    "methodProperties" => array(
        "Page" => "1",
        "Limit" => "20"
    ));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type' => 'application/json'));
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);
curl_close($ch);
var_dump($resp);*/
?>


</body>

</html>
