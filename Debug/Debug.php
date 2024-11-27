<?php

declare(strict_types=1);

namespace Test\Debug;

use Test\Test\Test;

class Debug
{
    private const string NeonTestFile = 'C:\www\dev\tex/test/config/test.neon';

    private const string TestClass = Test::class;

    public static bool $dump = false;

    public static function setFile(mixed $file): void
    {
        self::$dump = $file === self::NeonTestFile;
    }

    public static function setClass(mixed $class): void
    {
        self::$dump = $class === self::TestClass;
    }
}