<?php

namespace Datomatic\FattureInCloud\Http;

use Illuminate\Support\Facades\Http;

class Client
{
    /**
     * Auth constructor.
     *
     *
     * @throws \Exception
     */
    public function __construct(private readonly string $accessToken = '', private readonly string $companyId = '', private readonly string $endpoint = '')
    {
        if (empty($accessToken) || empty($companyId)) {
            throw new \Exception('You need to pass Access Token and Company Id');
        }
    }

    /**
     * Exec API call.
     */
    public function request(string $method = 'post', string $path = '', array $data = [], bool $forceUrl = false): array
    {
        $requestUrl = $this->endpoint;
        if (! $forceUrl) {
            $requestUrl .= 'c/'.$this->companyId.'/';
        }
        $requestUrl .= $path;

        $response = Http::withToken($this->accessToken)->$method($requestUrl, $data);

        return $response->throw()->json();
    }
}
