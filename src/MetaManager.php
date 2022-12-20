<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta;

/**
 * Class SeoMeta.
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
