<?php

namespace ByTIC\SeoMeta;

/**
 * Class SeoMeta
 * @package ByTIC\SeoMeta
 */
class MetaManager
{
    use MetaManager\CanRender;
    use MetaManager\HasConfig;
    use MetaManager\HasKeywords;
    use MetaManager\HasTags;
    use MetaManager\HasTitle;
    use MetaManager\HasViewport;
}
