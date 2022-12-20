<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\MetaManager;

/**
 * Trait HasConfig.
 */
trait HasConfig
{
    /**
     * @var array
     */
    protected $config = [
        'indentation' => '    ',
    ];

    /**
     * @return mixed|string|null
     */
    protected function getConfigValue($name)
    {
        if (!isset($this->config[$name])) {
            return null;
        }

        return $this->config[$name];
    }

    protected function getIndentation(): string
    {
        return $this->getConfigValue('indentation');
    }
}
