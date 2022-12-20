<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Utility;

use ByTIC\SeoMeta\MetaManager;
use Nip\Container\Utility\Container;

/**
 * Class SeoMeta.
 */
class SeoMeta
{
    /**
     * @return false|mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return \call_user_func_array([static::instance(), $name], $arguments);
    }

    public static function instance(): MetaManager
    {
        static $instance;

        if ($instance instanceof MetaManager) {
            return $instance;
        }
        if (!class_exists(Container::class)) {
            $instance = new MetaManager();

            return $instance;
        }

        $container = Container::get();
        $instance = $container->has(MetaManager::class) ? $container->get(MetaManager::class) : new MetaManager();

        return $instance;
    }
}
