<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tests\Utility;

use ByTIC\SeoMeta\Tests\AbstractTest;
use ByTIC\SeoMeta\Utility\SeoMeta;

/**
 * Class SeoMetaTest.
 */
class SeoMetaTest extends AbstractTest
{
    public function testCallStatic()
    {
        SeoMeta::title('test');
        self::assertSame(
            '<title>test</title>
',
            SeoMeta::render()
        );
    }
}
