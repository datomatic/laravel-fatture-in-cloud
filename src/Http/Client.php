<?php

namespace Datomatic\FattureInCloud\Http;

use Illuminate\Support\Facades\Http;

class Client
{
    /**
     * Auth constructor.
     *
     * @param  string  $accessToken
     * @param  string  $companyId
     * @param  string  $endpoint
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
     *
     * @param  string  $method
     * @param  string  $url
     * @param  array  $data
     * @param  bool  $forceUrl
     * @return array
     */
    public function request(string $method = 'post', string $url = '', array $data = [], bool $forceUrl = false): array
    {
        $requestUrl = $this->endpoint;
        if (! $forceUrl) {
            $requestUrl .= 'c/'.$this->companyId.'/';
        }
        $requestUrl .= $url;

        $response = Http::withToken($this->accessToken)->$method($requestUrl, $data);

        return $response->throw()->json();
    }
}
