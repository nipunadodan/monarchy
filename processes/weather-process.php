<?php
use Orange\ApiConnect;

$data = [];

$client = new GuzzleHttp\Client();

$url = 'https://api.openweathermap.org/data/2.5/weather?q=Colombo,LK&appid='.OPEN_WEATHER;

$headers = [
    'Accept' => 'application/json',
];

try {
    $res = $client->get($url, [
        'headers' => $headers,
        'form_params' => $data,
    ]);
}catch (GuzzleHttp\Exception\ClientException $e) {
    $res = $e->getResponse();
    $responseBodyAsString = $res->getBody()->getContents();
}
http_response_code($res->getStatusCode());
//echo $res->getHeader('content-type')[0];
echo $res->getBody();