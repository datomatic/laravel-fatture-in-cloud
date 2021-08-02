<?php

namespace Datomatic\FattureInCloud\Commands;

use Illuminate\Console\Command;

class FattureInCloudCommand extends Command
{
    public $signature = 'laravel-fatture-in-cloud';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
