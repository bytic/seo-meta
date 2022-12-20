<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tags;

/**
 * Class LinkTag.
 */
class LinkTag extends MetaTag
{
    protected $tag = 'link';
    protected $group = 'links';

    protected $attributes = [];

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function setAttributes(array $attributes): void
    {
        $this->attributes = $attributes;
    }

    protected function generateAttributes(): array
    {
        return $this->attributes;
    }
}
