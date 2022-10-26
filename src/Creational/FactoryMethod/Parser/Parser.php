<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Parser;

use Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Converter;

abstract class Parser
{
    public function process(): void
    {
        $converter = $this->createConverter();
        $converter->process();
    }

    abstract public function createConverter(): Converter;
}
