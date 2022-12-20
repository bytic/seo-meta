<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tags;

/**
 * Class MetaTag.
 */
class OgTag extends MetaTag
{
    protected $group = 'og';

    public const TYPE_TITLE = 'og:title';
    public const TYPE_DESCRIPTION = 'og:description';
    public const TYPE_IMAGE = 'og:image';
    public const TYPE_URL = 'og:url';
}
