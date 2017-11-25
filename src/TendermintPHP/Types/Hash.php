<?php

namespace TendermintPHP\Types;

class Hash
{
    private $hash;

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
