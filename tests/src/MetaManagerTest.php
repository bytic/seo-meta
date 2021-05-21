<?php

namespace ByTIC\SeoMeta\Tests;

use ByTIC\SeoMeta\MetaManager;

/**
 * Class MetaManagerTest
 * @package ByTIC\SeoMeta\Tests
 */
class MetaManagerTest extends AbstractTest
{
    public function test_configuration_full()
    {
        $this->test_configuration('full');
    }

    public function test_configuration_basic()
    {
        $this->test_configuration('basic');
    }

    protected function test_configuration($type)
    {
        $path = TEST_FIXTURE_PATH. DIRECTORY_SEPARATOR  . 'builders' . DIRECTORY_SEPARATOR . $type . DIRECTORY_SEPARATOR;

        /** @var MetaManager $manager */
        $manager = require $path . 'configure.php';

        self::assertSame(
            file_get_contents($path . 'output.html'),
            (string)$manager->render()
        );
    }
}