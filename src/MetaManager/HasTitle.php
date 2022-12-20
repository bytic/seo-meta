<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\TagFactory;
use ByTIC\SeoMeta\Tags\TagInterface;
use ByTIC\SeoMeta\Tags\TitleTag;

/**
 * Trait HasTitle.
 */
trait HasTitle
{
    /**
     * @param null $value
     */
    public function title($value = null): ?TitleTag
    {
        $tag = $this->autoInitTitle();
        if (null === $value) {
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
    protected function autoInitTitle(): TitleTag|TagInterface
    {
        return $this->autoInitTag(
            'title',
            function () {
                return TagFactory::title('');
            }
        );
    }
}
