<?php

declare(strict_types=1);

namespace Test\Test;

class Third
{
    public const string Constant = 'constantValue';
    public string $property = 'propertyValue';
    public static string $staticProperty = 'staticPropertyValue';

    public function getValue(): string
    {
        return 'valueByGetter';
    }
}