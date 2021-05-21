<?php

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\MetaTag;
use ByTIC\SeoMeta\Tags\Tag;
use ByTIC\SeoMeta\Tags\TagFactory;

/**
 * Trait HasKeywords
 * @package ByTIC\SeoMeta\MetaManager
 */
trait HasKeywords
{
    public function keywords($value): Tag
    {
        return $this->meta('keywords', $value);
    }

    /**
     * @param $keywords
     * @return $this
     */
    public function addKeywords($keywords)
    {
        $tag = $this->autoInitKeywords();

        if (!is_array($keywords)) {
            $keywords = [$keywords];
        }
        $existing = explode(',', $tag->getValue());
        $existing = array_merge($existing, $keywords);
        $tag->setValue(implode(',', $existing));

        return $this;
    }

    /**
     * @return MetaTag
     */
    protected function autoInitKeywords()
    {
        return $this->autoInitTag(
            'keywords',
            function () {
                return TagFactory::meta(MetaTag::NAME_TYPE, 'keywords', "");
            }
        );
    }
}
