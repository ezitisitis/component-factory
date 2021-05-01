<?php

namespace ComponentFactory\Console;

use Illuminate\Console\Command;

class MakeComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:component';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new component blade and sass';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        dd(123);
    }
}
