<?php

namespace Datomatic\FattureInCloud\Resources;

use Datomatic\FattureInCloud\Http\Client;

abstract class BaseResource
{
    protected Client $client;

    protected string $path;

    /**
     * Initialize Resource.
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    protected function request(string $method = 'get', int|string|null $path = null, array $data = [], bool $forceUrl = false): array
    {
        return $this->client->request(
            method: $method,
            path: $this->path.($path ? '/'.$path : ''),
            data: $this->parseDataArray($data),
            forceUrl: $forceUrl
        );
    }

    protected function requestData(string $method = 'get', int|string|null $path = null, array $data = [], bool $forceUrl = false): array
    {
        return $this->request($method, $path, $data, $forceUrl)['data'];
    }

    protected function parseDataArray(array $params): array
    {
        return $params;
    }

    protected function getList(string $url, bool $forceUrl = false, array $data = []): array
    {
        return $this->requestData(
            method: 'get',
            path: $url,
            data: $data,
            forceUrl: $forceUrl
        );
    }
}
