<?php

namespace TendermintPHP;

use Graze\GuzzleHttp\JsonRpc\Client;
use TendermintPHP\Methods\Blocks;
use TendermintPHP\Methods\Info;
use TendermintPHP\Methods\Transactions;

class TendermintClient
{
    private $client;
    private $methods = [];

    public function __construct(string $url)
    {
        $this->client = Client::factory($url);
        $this->methods = [
            'info' => new Info($this->client),
            'blocks' => new Blocks($this->client),
            'transactions' => new Transactions($this->client),
        ];
    }

    public function info(): Info
    {
        return $this->methods['info'];
    }

    public function blocks(): Blocks
    {
        return $this->methods['blocks'];
    }

    public function transactions(): Transactions
    {
        return $this->methods['transactions'];
    }
}
