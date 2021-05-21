<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class TitleTag
 * @package ByTIC\SeoMeta\Tags
 */
class TitleTag extends Tag
{
    protected $group = 'title';

    protected $name = "title";

    protected $base = "";

    protected $titleComponents = [
        'base' => false,
        'elements' => [],
        'separator' => ' - ',
    ];

    /**
     * @return string
     */
    public function getTitleBase(): string
    {
        return $this->base;
    }

    /**
     * @param string $base
     */
    public function setTitleBase(string $base): void
    {
        $this->base = $base;
        $this->generateTitle();
    }

    /**
     * @param $title
     * @return $this
     */
    public function appendTitle($title): TitleTag
    {
        $this->titleComponents['elements'][] = $title;
        $this->generateTitle();

        return $this;
    }

    /**
     * @param $title
     * @return $this
     */
    public function prependTitle($title): TitleTag
    {
        array_unshift($this->titleComponents['elements'], $title);
        $this->generateTitle();

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstTitle()
    {
        $components = $this->titleComponents['elements'];

        return end($components);
    }

    protected function generateTitle()
    {
        $components = $this->titleComponents['elements'];
        if ($this->base) {
            $components[] = $this->base;
        }
        $this->setValue(implode($this->titleComponents['separator'], $components));
    }

    protected function generate(): string
    {
        return \ByTIC\Html\Tags\Tag::tag(
            "title",
            $this->value
        );
    }
}