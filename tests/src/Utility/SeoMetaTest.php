<?php

namespace ByTIC\SeoMeta\Tests\Utility;

use ByTIC\SeoMeta\Tests\AbstractTest;
use ByTIC\SeoMeta\Utility\SeoMeta;

/**
 * Class SeoMetaTest
 * @package ByTIC\SeoMeta\Tests\Utility
 */
class SeoMetaTest extends AbstractTest
{
    public function test_call_static()
    {
        SeoMeta::title('test');
        self::assertSame(
            '<title>test</title>
',
            SeoMeta::render()
        );
    }
}
