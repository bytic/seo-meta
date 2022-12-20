<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tags;

/**
 * Class MetaTag.
 */
class MetaTag extends Tag
{
    protected $tag = 'meta';

    protected $group = 'meta';

    public const NAME_TYPE = 'name';
    public const PROPERTY_TYPE = 'property';
    public const HTTP_EQUIV_TYPE = 'http-equiv';

    /**
     * @var string
     */
    protected $type = self::NAME_TYPE;

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    protected function generate(): string
    {
        return (string) \ByTIC\Html\Tags\Tag::tag(
            $this->tag,
            null,
            $this->generateAttributes()
        );
    }

    protected function generateAttributes(): array
    {
        return [
            $this->type => $this->name,
            'content' => $this->value,
        ];
    }
}
