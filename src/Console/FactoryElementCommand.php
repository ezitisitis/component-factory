<?php

namespace EzitisItIs\ComponentFactory\Console;

class FactoryElementCommand extends FactoryExtendable
{
    protected $viewPathConfigKey = 'path.element.view';

    protected $viewFallback = 'view/elements';

    protected $stylePathConfigKey = 'path.element.style';

    protected $styleFallback = 'assets/scss/elements';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'factory:element {fileName} {--sass}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new element blade and style';
}
