<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tags;

/**
 * Class TitleTag.
 */
class TitleTag extends Tag
{
    protected $group = 'title';

    protected $name = 'title';

    protected $base = '';

    protected $titleComponents = [
        'base' => false,
        'elements' => [],
        'separator' => ' - ',
    ];

    public function getTitleBase(): string
    {
        return $this->base;
    }

    public function setTitleBase(string $base): void
    {
        $this->base = $base;
        $this->generateTitle();
    }

    /**
     * @return $this
     */
    public function appendTitle($title): self
    {
        $this->titleComponents['elements'][] = $title;
        $this->generateTitle();

        return $this;
    }

    /**
     * @return $this
     */
    public function prependTitle($title): self
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
        return (string) \ByTIC\Html\Tags\Tag::tag(
            'title',
            $this->value
        );
    }
}
