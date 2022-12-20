<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tests;

use ByTIC\SeoMeta\MetaManager;

/**
 * Class MetaManagerTest.
 */
class MetaManagerTest extends AbstractTest
{
    public function testConfigurationFull()
    {
        $this->testConfiguration('full');
    }

    public function testConfigurationBasic()
    {
        $this->testConfiguration('basic');
    }

    protected function testConfiguration($type)
    {
        $path = TEST_FIXTURE_PATH . \DIRECTORY_SEPARATOR . 'builders' . \DIRECTORY_SEPARATOR . $type . \DIRECTORY_SEPARATOR;

        /** @var MetaManager $manager */
        $manager = require $path . 'configure.php';

        self::assertSame(
            file_get_contents($path . 'output.html'),
            (string) $manager->render()
        );
    }
}
