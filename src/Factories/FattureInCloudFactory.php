<?php

namespace Datomatic\FattureInCloud\Factories;

use Datomatic\FattureInCloud\FattureInCloud;

class FattureInCloudFactory
{
    /**
     * @throws \Exception
     */
    public static function execute(): FattureInCloud
    {
        return new FattureInCloud(FattureInCloudClientFactory::execute());
    }
}
