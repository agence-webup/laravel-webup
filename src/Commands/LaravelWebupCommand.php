<?php

namespace webup\LaravelWebup\Commands;

use Illuminate\Console\Command;

class LaravelWebupCommand extends Command
{
    public $signature = 'laravel-webup';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
