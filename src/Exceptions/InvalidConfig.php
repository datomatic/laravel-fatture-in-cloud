<?php

namespace Datomatic\FattureInCloud\Exceptions;

use RuntimeException;

class InvalidConfig extends RuntimeException
{
    public static function missingAccessToken(): self
    {
        return new self('You need to set access_token on fatture-in-cloud.php config file');
    }

    public static function missingCompanyId(): self
    {
        return new self('You need to set company_id on fatture-in-cloud.php config file');
    }

    public static function wrongStringParam(string $param): self
    {
        return new self("The param $param on fatture-in-cloud.php config file must be a string");
    }
}
