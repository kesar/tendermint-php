<?php

namespace TendermintPHP\Types;

class Block
{
    private $height;
    private $hash;
    private $chainId;
    private $time;
    private $validatorsHash;
    private $appHash;
    private $transactions;

    public function __construct(array $response)
    {
        $this->height = $response['block']['header']['height'];
        $this->hash = new BlockHash($response['block_meta']['block_id']['hash']);
        $this->chainId = $response['block']['header']['chain_id'];
        $this->time = $response['block']['header']['time'];
        $this->validatorsHash = new Hash($response['block']['header']['validators_hash']);
        $this->appHash = $response['block']['header']['app_hash'];
        $this->transactions = [];
        foreach ($response['block']['data']['txs'] as $transaction) {
            $this->transactions[] = new TransactionHash($transaction);
        }
    }

    public function height(): int
    {
        return $this->height;
    }

    public function hash(): BlockHash
    {
        return $this->hash;
    }

    public function chainId(): string
    {
        return $this->chainId;
    }

    public function time(): string // TODO: make DateTime
    {
        return $this->time;
    }

    public function validatorsHash(): Hash
    {
        return $this->validatorsHash;
    }

    public function appHash(): ?string
    {
        return $this->appHash;
    }

    public function transactions(): array
    {
        return $this->transactions;
    }
}
