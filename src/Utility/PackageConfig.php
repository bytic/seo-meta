<?php

namespace Paytic\SeoMeta\Utility;

use ByTIC\SeoMeta\SeoMetaServiceProvider;
use Nip\Utility\Traits\SingletonTrait;

class PackageConfig extends \ByTIC\PackageBase\Utility\PackageConfig
{
    use SingletonTrait;

    protected $name = SeoMetaServiceProvider::NAME;

    public static function configPath(): string
    {
        return __DIR__ . '/../../config/seo-meta.php';
    }

}
