<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\TagFactory;
use ByTIC\SeoMeta\Tags\ViewportTag;

/**
 * Trait viewport.
 */
trait HasViewport
{
    /**
     * @param null $value
     */
    public function viewport($value = null): ?ViewportTag
    {
        $tag = $this->autoInitViewport();
        if (null === $value) {
            return $tag;
        }
        $tag->setValue($value);

        return $tag;
    }

    /**
     * @return ViewportTag
     */
    protected function autoInitViewport()
    {
        return $this->autoInitTag(
            'viewport',
            function () {
                return TagFactory::viewport('');
            }
        );
    }
}
