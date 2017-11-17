<?php

namespace TendermintPHP\Methods;

use TendermintPHP\Types\Block;

class Blocks extends AbstractMethods
{
    public function block(int $blockNumber)
    {
        $response = $this->client->send(
            $this->client->request(null, 'block', [$blockNumber])
        );

        return new Block($response->getRpcResult());
    }

    public function blockNumber(): int
    {
        $response = $this->client->send(
            $this->client->request(null, 'status', [])
        );

        $result = $response->getRpcResult();

        return $result['latest_block_height'];
    }
}
