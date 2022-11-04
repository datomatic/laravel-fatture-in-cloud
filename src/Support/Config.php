<?php

namespace Datomatic\FattureInCloud\Support;

use Datomatic\FattureInCloud\Exceptions\InvalidConfig;
use Throwable;

class Config
{
    /**
     * @throws Throwable
     */
    public static function getAccessToken(): string
    {
        $accessToken = config('fatture-in-cloud.access_token');

        throw_if(empty($accessToken), InvalidConfig::missingAccessToken());
        throw_if(! is_string($accessToken), InvalidConfig::wrongStringParam('access_token'));

        return $accessToken;
    }

    /**
     * @throws Throwable
     */
    public static function getCompanyId(): string
    {
        $companyId = config('fatture-in-cloud.company_id');

        throw_if(empty($companyId), InvalidConfig::missingCompanyId());
        throw_if(! is_string($companyId), InvalidConfig::wrongStringParam('company_id'));

        return $companyId;
    }

    public static function getEndpoint(): string
    {
        $endpoint = config('fatture-in-cloud.endpoint');

        throw_if(! is_string($endpoint), InvalidConfig::wrongStringParam('endpoint'));

        return $endpoint;
    }
}
