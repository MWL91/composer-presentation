<?php

namespace Escola\Presentation\Tests\Features;

use Orchestra\Testbench\TestCase;

class AttachmentTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [\Escola\Presentation\PackageServiceProvider::class];
    }

    public function test_that_true_is_not_false(): void
    {
        $this->assertTrue(!false);
    }

    public function test_that_config_works(): void
    {
        $this->assertEquals('example', config('presentation.test'));
    }
}
