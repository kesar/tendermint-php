<?php

use TendermintPHP\TendermintClient;

include 'vendor/autoload.php';

$client = new TendermintClient('http://localhost:46657');

//print_r($client->info()->abciInfo());
print_r($client->blocks()->block(1));
echo $client->blocks()->blockNumber();