<?php

use App\Calculator\CalculatorClient;

require 'vendor/autoload.php';

$client = new CalculatorClient(
    'localhost:50051',
    [
        'credentials' => \Grpc\ChannelCredentials::createSsl(file_get_contents("app.crt")),
    ]
);

[$result, $mt] = $client->Sum(
    new \App\Calculator\Sum([
        'a' => 1,
        'b' => 2
    ])
)->wait();

print_r($result->getResult());