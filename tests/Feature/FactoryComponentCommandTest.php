<?php
declare(strict_types=1);

use Tests\TestCase;

class FactoryComponentCommandTest extends TestCase
{
    public function test_command_without_filename()
    {
        $this->expectException(Symfony\Component\Console\Exception\RuntimeException::class);
        $this->artisan('factory:component');
    }

    public function test_command_with_filename_without_sass_flag()
    {
        $this->artisan('factory:component test')
             ->expectsOutput('Blade is created')
             ->expectsOutput('SCSS is created')
             ->expectsOutput('Files are created');
    }

    public function test_command_with_filename_with_sass_flag()
    {
        $this->artisan('factory:component test --sass');
    }

    public function test_command_with_one_directory_in_filename_without_sass_flag()
    {

    }

    public function test_command_with_one_directory_in_filename_with_sass_flag()
    {

    }

    public function test_command_with_two_directories_in_filename_without_sass_flag()
    {

    }

    public function test_command_with_two_directories_in_filename_with_sass_flag()
    {

    }
}
