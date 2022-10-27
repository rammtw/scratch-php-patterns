<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Laptop;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Laptop;

final class XiaomiLaptop implements Laptop
{
    public function getMatrixInfo(): array
    {
        return [
            'type' => '2.5K Mi TrueLife',
        ];
    }

    public function hasMiniJack(): bool
    {
        return true;
    }
}
