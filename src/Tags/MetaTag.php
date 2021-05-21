<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class MetaTag
 * @package ByTIC\SeoMeta\Tags
 */
class MetaTag extends Tag
{
    protected $group = 'meta';

    const NAME_TYPE = 'name';
    const PROPERTY_TYPE = 'property';
    const HTTP_EQUIV_TYPE = 'http-equiv';


    /**
     * @var string
     */
    protected $type = self::NAME_TYPE;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    protected function generate(): string
    {
        return \ByTIC\Html\Tags\Tag::tag(
            "meta",
            null,
            [
                $this->type => $this->name,
                'content' => $this->value
            ]
        );
    }
}