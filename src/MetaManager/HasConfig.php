<?php

namespace ByTIC\SeoMeta\MetaManager;

/**
 * Trait HasConfig
 * @package ByTIC\SeoMeta\MetaManager
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
     * @param $name
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