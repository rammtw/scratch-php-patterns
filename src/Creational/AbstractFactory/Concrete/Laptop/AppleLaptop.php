<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Laptop;

final class AppleLaptop implements Laptop
{
    public function getMatrixInfo(): array
    {
        return [
            'type' => 'Liquid Retina XDR',
        ];
    }

    public function hasMiniJack(): bool
    {
        return false;
    }
}
