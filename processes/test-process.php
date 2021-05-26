<?php
$client = new GuzzleHttp\Client();

$url = 'http://localhost/nsd/orange/processes/404.php';

$headers = [
    'Accept' => 'application/json',
];

$GetOrder = [
    'number' => '6',
    'vchar' => 'A',
];

/*$GetOrder = [
    'refID' => 'BCB5967'
];*/

//$client = new Client();
$res = $client->post($url, [
    'headers' => $headers,
    'json' => $GetOrder,
]);
http_response_code ($res->getStatusCode());
//echo $res->getHeader('content-type')[0];
echo $res->getBody();