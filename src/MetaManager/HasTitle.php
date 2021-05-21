<?php

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\TagFactory;
use ByTIC\SeoMeta\Tags\TitleTag;

/**
 * Trait HasTitle
 * @package ByTIC\SeoMeta\MetaManager
 */
trait HasTitle
{

    /**
     * @param null $value
     * @return TitleTag|null
     */
    public function title($value = null): ?TitleTag
    {
        $tag = $this->autoInitTitle();
        if ($value === null) {
            return $tag;
        }
        $tag->setValue($value);
        return $tag;
    }

    public function setTitleBase($base)
    {
        $this->autoInitTitle()->setTitleBase($base);
    }

    public function appendTitle($title)
    {
        $this->autoInitTitle()->appendTitle($title);
    }

    public function prependTitle($title)
    {
        $this->autoInitTitle()->prependTitle($title);
    }

    public function getFirstTitle()
    {
        $this->autoInitTitle()->getFirstTitle();
    }

    /**
     * @return TitleTag
     */
    protected function autoInitTitle()
    {
        return $this->autoInitTag(
            'title',
            function () {
                return TagFactory::title("");
            }
        );
    }
}
