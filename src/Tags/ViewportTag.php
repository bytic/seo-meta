<?php

namespace ByTIC\SeoMeta\Tags;

/**
 * Class ViewportTag
 * @package ByTIC\SeoMeta\Tags
 */
class ViewportTag extends MetaTag
{
    protected $group = 'viewport';

    protected $name = "viewport";

    public const WIDTH_DEVICE_WIDTH = "width=device-width";
    public const HEIGHT_DEVICE_HEIGHT = "height=device-height";
    public const SCALE_INITIAL_1 = "initial-scale=1";
    public const SCALE_MINIMUM_1 = "minimum-scale=1.0";
    public const SCALE_MAXIMUM_1 = "maximum-scale=1.0";
    public const USER_SCALABLE_NO = "user-scalable=no";
    public const SHRINK_TO_FIT_NO = "shrink-to-fit=no";

    public function addResponsive()
    {
        $this->addValues(
            self::WIDTH_DEVICE_WIDTH,
            self::SCALE_INITIAL_1,
            self::SHRINK_TO_FIT_NO
        );
    }

    public function addValues(...$values)
    {
        $existing = explode(',', $this->getValue());
        $values = array_merge($existing, $values);
        $values = array_unique($values);
        $values = array_filter($values);
        $this->setValue(implode(',', $values));
    }

}