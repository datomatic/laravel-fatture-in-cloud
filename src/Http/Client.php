<?php

namespace Datomatic\FattureInCloud\Http;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class Client
{
    private $accessToken = null;
    private $companyId = null;
    private $endpoint = null;

    /**
     * Auth constructor.
     *
     * @param string $accessToken
     * @param string $companyId
     * @param string $endpoint
     *
     * @throws \Exception
     */
    public function __construct($accessToken = '', $companyId = '', $endpoint = '')
    {
        if (empty($accessToken) || empty($companyId)) {
            throw new \Exception('You need to pass Access Token and Company Id');
        }

        $this->accessToken = $accessToken;
        $this->companyId = $companyId;
        $this->endpoint = $endpoint;
    }

    /**
     * Exec API call.
     *
     * @param string $url
     * @param array $data
     * @param string $method
     *
     * @return array|mixed
     *
     * @throws RequestException
     */
    public function request($method = 'post', $url = '', $data = [], $force_url = false)
    {
        $requestUrl = $this->endpoint;
        if (!$force_url) {
            $requestUrl .= "c/" . $this->companyId . "/";
        }
        $requestUrl .= $url;

        $response = Http::withToken($this->accessToken)->$method($requestUrl, $data);

        return $response->throw()->json();
    }
}
