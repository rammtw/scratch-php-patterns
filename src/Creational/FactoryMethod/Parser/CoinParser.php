<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Parser;

use Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Converter;

final class CoinParser extends Parser
{
    public function createConverter(): Converter
    {
        return new Converter\JsonConverter();
    }
}
