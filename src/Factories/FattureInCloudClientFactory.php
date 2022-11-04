<?php

namespace Datomatic\FattureInCloud\Factories;

use Datomatic\FattureInCloud\Http\Client;
use Datomatic\FattureInCloud\Support\Config;

class FattureInCloudClientFactory
{
    public static function execute(): Client
    {
        return new Client(
            accessToken: Config::getAccessToken(),
            companyId: Config::getCompanyId(),
            endpoint: Config::getEndpoint()
        );
    }
}
