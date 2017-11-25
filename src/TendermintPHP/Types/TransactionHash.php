<?php

namespace TendermintPHP\Types;

class TransactionHash
{
    protected $hash;

    public function __construct(string $hash)
    {
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
