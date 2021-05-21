<?php

namespace ByTIC\SeoMeta\Tests\Tags;

use ByTIC\SeoMeta\Tags\TitleTag;
use ByTIC\SeoMeta\Tests\AbstractTest;

/**
 * Class TitleTagTest
 * @package ByTIC\SeoMeta\Tests\Tags
 */
class TitleTagTest extends AbstractTest
{
    public function test_title_base()
    {
        $title = new TitleTag();
        $title->setTitleBase('base');

        self::assertSame('<title>base</title>', (string) $title);
    }
}
