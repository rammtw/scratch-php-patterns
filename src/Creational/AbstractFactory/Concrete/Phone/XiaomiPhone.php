<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Phone;

final class XiaomiPhone implements Phone
{
    public function getOs(): string
    {
        return 'Android';
    }

    public function call(): void
    {
        echo 'call from xiaomi phone...';
    }
}
