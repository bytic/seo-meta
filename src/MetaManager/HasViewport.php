<?php

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\MetaTag;
use ByTIC\SeoMeta\Tags\Tag;
use ByTIC\SeoMeta\Tags\TagFactory;
use ByTIC\SeoMeta\Tags\ViewportTag;

/**
 * Trait viewport
 * @package ByTIC\SeoMeta\MetaManager
 */
trait HasViewport
{

    /**
     * @param null $value
     * @return ViewportTag|null
     */
    public function viewport($value = null): ?ViewportTag
    {
        $tag = $this->autoInitViewport();
        if ($value === null) {
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
                return TagFactory::viewport("");
            }
        );
    }
}
