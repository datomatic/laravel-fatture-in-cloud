<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Http\Client;

abstract class BaseResource
{
    /**
     * @var Client
     */
    protected Client $client;

    protected string $path;

    /**
     * Initialize Resource.
     *
     * @param  Client  $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function getList(string $url, bool $force_url = false): array
    {
        return $this->client->request(
            'get',
            $this->path.'/'.$url,
            [],
            $force_url
        )['data'];
    }
}
