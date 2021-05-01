<?php

namespace EzitisItIs\ComponentFactory\Console;

class MakeComponentCommand extends MakeExtendable
{
    protected $viewPathConfigKey = 'path.component.view';

    protected $viewFallback = 'views/components';

    protected $stylePathConfigKey = 'path.component.style';

    protected $styleFallback = 'assets/scss/components';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:component {fileName} {--sass}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new component blade and style';
}
