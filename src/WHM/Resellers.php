<?php

namespace LightsLab\cPanelWHM\WHM;

use LightsLab\cPanelWHM\WHMClient;

class Resellers
{
    protected $client;
    public function __construct(WHMClient $client)
    {
        $this->client = $client;
    }
    public function searchAccounts()
    {
        return $this->client->sendRequest("/json-api/listaccts", "GET");
    }
}
