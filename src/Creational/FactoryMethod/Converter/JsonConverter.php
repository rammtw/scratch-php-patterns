<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Converter;

use Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Converter;

final class JsonConverter implements Converter
{
    public function process(): void
    {
        echo 'json process';
    }
}
