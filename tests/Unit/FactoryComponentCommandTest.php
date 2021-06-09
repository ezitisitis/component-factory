<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FactoryComponentCommandTest extends TestCase
{
    public function test_it_has_factory_component_command()
    {
        $this->assertTrue(class_exists(\EzitisItIs\ComponentFactory\Console\FactoryComponentCommand::class));
    }
}
