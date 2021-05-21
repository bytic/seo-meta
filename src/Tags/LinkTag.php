<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class LinkTag
 * @package ByTIC\SeoMeta\Tags
 */
class LinkTag extends MetaTag
{
    protected $tag = 'link';
    protected $group = 'links';

    protected $attributes = [];

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     */
    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    protected function generateAttributes(): array
    {
        return $this->attributes;
    }
}