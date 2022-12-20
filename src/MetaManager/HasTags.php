<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\MetaManager;

use ByTIC\SeoMeta\Tags\MetaTag;
use ByTIC\SeoMeta\Tags\Tag;
use ByTIC\SeoMeta\Tags\TagFactory;
use ByTIC\SeoMeta\Tags\TagInterface;
use ByTIC\SeoMeta\Tags\ViewportTag;

/**
 * Trait HasTags.
 */
trait HasTags
{
    /**
     * @var Tag[]
     */
    protected $tags = [];

    protected $tagsGroups = [];

    public function robots($value): Tag
    {
        return $this->meta('robots', $value);
    }

    public function author($value): Tag
    {
        return $this->meta('author', $value);
    }

    /**
     * @deprecated use author
     */
    public function authors($value): Tag
    {
        return $this->author($value);
    }

    public function description($value): Tag
    {
        return $this->meta('description', $value);
    }

    public function meta($name, $value, $type = MetaTag::NAME_TYPE): Tag
    {
        return $this->addTag(TagFactory::meta($type, $name, $value));
    }

    public function og(string $name, string $value): Tag
    {
        return $this->addTag(TagFactory::og($name, $value));
    }

    public function twitter(string $name, string $value): Tag
    {
        return $this->addTag(TagFactory::twitter($name, $value));
    }

    public function link(string $key, $value): Tag
    {
        return $this->addTag(TagFactory::link($key, $value));
    }

    public function tag($name): ?Tag
    {
        if (!isset($this->tags[$name])) {
            return null;
        }

        return $this->tags[$name];
    }

    /**
     * @return Tag|ViewportTag
     */
    protected function autoInitTag($name, $callback): ViewportTag|Tag|TagInterface
    {
        if (!isset($this->tags[$name])) {
            $this->addTag($callback());
        }

        return $this->tags[$name];
    }

    protected function addTag(Tag $tag): Tag
    {
        $this->addToTagsGroup($tag->getGroup(), $tag->getName(), $tag);

        return $this->tags[$tag->getName()] = $tag;
    }

    protected function addToTagsGroup($group, $key, $tag)
    {
        $this->tagsGroups[$group][$key] = $tag;
    }
}
