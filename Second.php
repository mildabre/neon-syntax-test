<?php

declare(strict_types=1);

namespace Test;

class Second
{
    public const string Constant = 'constantValue';
    public string $property = 'propertyValue';
    public static string $staticProperty = 'staticPropertyValue';
    public static Third $thirdByStatic;
    public Third $third;

    public function __construct(Third $third = null)
    {
        self::$thirdByStatic = $third;
        $this->third = $third;
    }

    public function getThird(): Third
    {
        return $this->third;
    }

    public function getValue(): string
    {
        return 'valueByGetter';
    }

    public static function getValueByStatic(): string
    {
        return 'valueByStaticGetter';
    }



}