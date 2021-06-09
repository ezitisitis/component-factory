<?php

namespace EzitisItIs\ComponentFactory\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class FactoryExtendable extends Command
{
    const EXTENSION_BLADE = '.blade.php';
    const EXTENSION_SCSS = '.scss';
    const EXTENSION_SASS = '.sass';

    /**
     * @var Filesystem
     */
    protected $files;

    /**
     * @var string
     */
    protected $viewPath;

    /**
     * @var string
     */
    protected $stylePath;

    /**
     * @var string
     */
    protected $viewPathConfigKey;

    /**
     * @var string
     */
    protected $stylePathConfigKey;

    /**
     * @var string
     */
    protected $viewFallback;

    /**
     * @var string
     */
    protected $styleFallback;

    /**
     * Create a new command instance.
     *
     * @param  Filesystem  $files
     */
    public function __construct(Filesystem $filesystem)
    {
        parent::__construct();
        $this->files = $filesystem;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->setViewsPath();
        $this->setStylePath();

        $fileName = $this->argument('fileName');
        $this->createBlade($fileName);
        $this->createStyle($fileName);
        $this->info('Files are created');

        return 0;
    }

    protected function setViewsPath()
    {
        $this->viewPath = config($this->viewPathConfigKey, resource_path($this->viewFallback)).'/';
    }

    protected function setStylePath()
    {
        $this->stylePath = config($this->stylePathConfigKey, resource_path($this->styleFallback)).'/';
    }

    protected function createBlade(string $fileName): void
    {
        $this->createFile($this->viewPath.$fileName.self::EXTENSION_BLADE);
        $this->info('Blade is created');
    }

    protected function createStyle(string $fileName): void
    {
        $fileName = $this->convertStyleFilename($fileName);
        $this->createFile($this->stylePath.$fileName.$this->getExtension());
        
        if ($this->option('sass')) {
            $this->info('SASS is created');
        } else {
            $this->info('SCSS is created');
        }
    }

    protected function createFile(string $fileName): void
    {
        if (substr_count($fileName, '/') !== 0) {
            $path = $this->getPath($fileName);

            $this->files->ensureDirectoryExists($path);
        }

        $this->files->put($fileName, '');
    }

    /**
     * @param $fileName
     *
     * @return string
     */
    protected function getPath($fileName): string
    {
        $paths = explode('/', $fileName);
        array_pop($paths);

        $return = '';
        foreach ($paths as $path) {
            $return .= $path . '/';
        }

        return $return;
    }

    private function getExtension(): string
    {
        if ($this->option('sass')) {
            $extension = self::EXTENSION_SASS;
        } else {
            $extension = self::EXTENSION_SCSS;
        }

        return $extension;
    }

    private function convertStyleFilename(string $fileName): string
    {
        if (substr_count($fileName, '/') !== 0) {
            $paths = explode('/', $fileName);

            // TODO: refactor this
            $fileName = '';
            $lastKey = array_search(end($paths), $paths);
            foreach ($paths as $key => $path) {
                if ($key == $lastKey) {
                    $fileName .= '_' . $path;
                } else {
                    $fileName .= $path . '/';
                }
            }
        }

        return $fileName;
    }
}
