<?php

namespace TendermintPHP\Methods;

use Graze\GuzzleHttp\JsonRpc\ClientInterface;

abstract class AbstractMethods
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }
}
