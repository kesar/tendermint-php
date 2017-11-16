<?php

namespace TendermintPHP\Methods;

class Blocks extends AbstractMethods
{
    public function block(int $blockNumber)
    {
        $response = $this->client->send(
            $this->client->request(null, 'block', [$blockNumber])
        );

        return $response->getRpcResult();
    }
}
