<?php

namespace Modularavel\ModuleMaker\Commands;

use Illuminate\Console\Command;

class ModuleMakerCommand extends Command
{
    public $signature = 'module-maker';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
