<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tests\Tags;

use ByTIC\SeoMeta\Tags\TitleTag;
use ByTIC\SeoMeta\Tests\AbstractTest;

/**
 * Class TitleTagTest.
 */
class TitleTagTest extends AbstractTest
{
    public function testTitleBase()
    {
        $title = new TitleTag();
        $title->setTitleBase('base');

        self::assertSame('<title>base</title>', (string) $title);
    }
}
