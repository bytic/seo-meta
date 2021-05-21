<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class MetaTag
 * @package ByTIC\SeoMeta\Tags
 */
class OgTag extends MetaTag
{
    protected $group = 'og';

    const TYPE_TITLE = 'og:title';
    const TYPE_DESCRIPTION = 'og:description';
    const TYPE_IMAGE = 'og:image';
    const TYPE_URL = 'og:url';
}