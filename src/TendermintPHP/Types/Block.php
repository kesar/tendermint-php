<?php

namespace TendermintPHP\Types;

class Block
{
    public function __construct(array $response)
    {
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
}