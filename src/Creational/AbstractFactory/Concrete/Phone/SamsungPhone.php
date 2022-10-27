<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Phone;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Phone;

final class SamsungPhone implements Phone
{
    public function getOs(): string
    {
        return 'Android';
    }

    public function call(): void
    {
        echo 'call from samsung phone...';
    }
}
