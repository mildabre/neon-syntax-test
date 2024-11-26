<?php

declare(strict_types=1);

namespace Test\Test;

use Nette\Application\UI\Presenter;

class TestPresenter extends Presenter
{

    public function __construct(private Test $test)
    {}

    public function actionDefault(): void
    {
        bdump($this->test->getValues());
    }

}

define('GlobalConstant', 'globalConstantValue');
