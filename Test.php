<?php

declare(strict_types=1);

namespace Test;

use ReflectionClass;

class Test
{
    public ?string $prop1 = null;
    public ?string $prop2 = null;
    public ?string $prop3 = null;

    private array $values;

    private ?string $property = null;

    public function __construct(?string ...$values)
    {
        $this->values = $values;
    }

    public function getValues(): array
    {
        $rc = new ReflectionClass(self::class);
        $properties = $rc->getProperties(\ReflectionProperty::IS_PUBLIC);
        $propertyValues = [];
        foreach($properties as $property){
            if($property->getValue($this)){
                $propertyValues[] = $property->getValue($this);
            }
        }
        return array_merge($this->values, $propertyValues, [$this->property]);
    }

    public function setProperty(string $value):void
    {
        $this->property = $value;
    }

}
