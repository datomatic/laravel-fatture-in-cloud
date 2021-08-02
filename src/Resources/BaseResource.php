<?php

namespace Datomatic\FattureInCloud\Resources;

abstract class BaseResource
{
    /**
     * @var \Datomatic\FattureInCloud\Http\Client
     */
    protected $client;

    protected $path;

    /**
     * Initialize Resource.
     *
     * @param \Datomatic\FattureInCloud\Http\Client $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    protected function getList($url, $force_url = false)
    {
        return $this->client->request(
            'get',
            $this->path.'/'.$url,
            [],
            $force_url
        )["data"];
    }
}
