<?php

declare(strict_types=1);

namespace Test;

class First
{
    public const string Constant = 'constantValue';
    public string $property = 'propertyValue';
    public static string $staticProperty = 'staticPropertyValue';
    public static Second $secondByStatic;
    public Second $second;

    public function __construct(Second $second)
    {
        $this->second = $second;
        self::$secondByStatic = $second;
    }

    public function getSecond(?string $value = null): Second
    {
        if($value){
            $this->second->setProperty($value);
        }
        return $this->second;
    }

    public function getValue(): string
    {
        return 'valueByGet';
    }
}