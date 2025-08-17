<?php

namespace Tijanieneye10\Playaround\Commands;

use Illuminate\Console\Command;

class PlayaroundCommand extends Command
{
    public $signature = 'playaround';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
