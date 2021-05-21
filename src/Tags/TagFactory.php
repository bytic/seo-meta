<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class TagFactory
 * @package ByTIC\SeoMeta\Tags
 */
class TagFactory
{
    public static function meta($type, $name, $value): MetaTag
    {
        $tag = new MetaTag();
        $tag->setType($type);
        $tag->setName($name);
        $tag->setValue($value);
        return $tag;
    }

    public static function og($name, $value): MetaTag
    {
        $tag = new MetaTag();
        $tag->setName('og:' . $name);
        $tag->setValue($value);
        return $tag;
    }

    public static function twitter($name, $value): MetaTag
    {
        $tag = new TwitterTag();
        $tag->setName('twitter:' . $name);
        $tag->setValue($value);
        return $tag;
    }

    public static function link($key, $value): MetaTag
    {
        $attributes = ['rel' => $key];

        if (is_array($value)) {
            foreach ($value as $key => $v) {
                $attributes[$key] = $v;
            }
        } else {
            $attributes['href'] = $value;
        }

        $tag = new LinkTag();
        $tag->setName(md5(serialize($attributes)));
        $tag->setAttributes($attributes);
        return $tag;
    }

    public static function title($value): TitleTag
    {
        $tag = new TitleTag();
        $tag->setValue($value);
        return $tag;
    }
}