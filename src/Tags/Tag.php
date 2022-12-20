<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\Tags;

/**
 * Class Tag.
 */
abstract class Tag implements TagInterface
{
    protected $tag = null;

    protected $group = null;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $value;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string|\Stringable $value
     */
    public function setValue($value): void
    {
        $this->value = (string) $value;
    }

    /**
     * @return null
     *
     * @internal
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function __toString(): string
    {
        return $this->render();
    }

    public function render(): string
    {
        if (empty($this->name)) {
            return '';
        }

        return $this->generate();
    }

    abstract protected function generate(): string;
}
