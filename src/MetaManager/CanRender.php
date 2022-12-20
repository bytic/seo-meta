<?php

declare(strict_types=1);

namespace ByTIC\SeoMeta\MetaManager;

/**
 * Trait CanRender.
 */
trait CanRender
{
    /**
     * @param null $groups
     *
     * @return array|string|string[]|null
     */
    public function render($groups = null)
    {
        $groups = null !== $groups ? (array) $groups : array_keys($this->tagsGroups);

        $html = [];

        foreach ($groups as $group) {
            $html[] = $this->renderGroup($group);
        }

        $html = implode('', $html);

        // Remove first indentation
        return preg_replace("/^{$this->getIndentation()}/", '', $html, 1);
    }

    /**
     * Render all HTML meta tags from a specific group.
     *
     * @param string $group
     */
    protected function renderGroup($group): string
    {
        if (!isset($this->tagsGroups[$group])) {
            return '';
        }

        $html = [];

        foreach ($this->tagsGroups[$group] as $tag) {
            if (\is_array($tag)) {
                foreach ($tag as $item) {
                    $html[] = $item;
                }
            } else {
                $html[] = $tag;
            }
        }

        return \count($html) > 0
            ? $this->getIndentation() . implode("\n" . $this->getIndentation(), $html) . "\n"
            : '';
    }
}
