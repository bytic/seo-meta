<?php

namespace ByTIC\SeoMeta\MetaManager;

/**
 * Trait CanRender
 * @package ByTIC\SeoMeta\MetaManager
 */
trait CanRender
{
    /**
     * @param null $groups
     * @return array|string|string[]|null
     */
    public function render($groups = null)
    {
        $groups = !is_null($groups) ? (array)$groups : array_keys($this->tagsGroups);

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
     *
     * @return string
     */
    protected function renderGroup($group): string
    {
        if (!isset($this->tagsGroups[$group])) {
            return "";
        }

        $html = [];

        foreach ($this->tagsGroups[$group] as $tag) {
            if (is_array($tag)) {
                foreach ($tag as $t) {
                    $html[] = $t;
                }
            } else {
                $html[] = $tag;
            }
        }

        return count($html) > 0
            ? $this->getIndentation() . implode("\n" . $this->getIndentation(), $html) . "\n"
            : '';
    }
}