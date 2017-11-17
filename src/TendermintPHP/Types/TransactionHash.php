<?php

namespace TendermintPHP\Types;

class TransactionHash
{
    protected $hash;

    public function __construct(string $hash)
    {
        if (strlen($hash) !== 140) {
            throw new \LengthException($hash.' is not valid.');
        }
        $this->hash = $hash;
    }

    public function __toString()
    {
        return $this->hash;
    }

    public function toString()
    {
        return $this->hash;
    }
}
