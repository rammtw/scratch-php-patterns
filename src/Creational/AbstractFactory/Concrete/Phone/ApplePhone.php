<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Phone;

final class ApplePhone implements Phone
{
    public function getOs(): string
    {
        return 'iOS';
    }

    public function call(): void
    {
        echo 'call from apple phone...';
    }
}
