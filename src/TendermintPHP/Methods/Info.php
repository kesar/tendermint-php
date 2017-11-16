<?php

namespace TendermintPHP\Methods;

class Info extends AbstractMethods
{
    public function abciInfo(): array
    {
        $response = $this->client->send(
            $this->client->request(null, 'abci_info', [])
        );

        return $response->getRpcResult()['response'];
    }
}
