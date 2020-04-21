<?php

use App\Calculator\CalculatorClient;

require 'vendor/autoload.php';

$client = new CalculatorClient(
    'localhost:50051',
    [
        'credentials' => \Grpc\ChannelCredentials::createInsecure(),
    ]
);
$sum = new \App\Calculator\Sum([
    'a' => 1,
    'b' => 2
]);
[$result, $mt] = $client->Sum($sum)->wait();
// var_dump($result, $mt);
print_r($result->getResult());