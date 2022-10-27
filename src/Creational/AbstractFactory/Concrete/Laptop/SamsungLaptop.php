<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\Laptop;

final class SamsungLaptop implements Laptop
{
    public function getMatrixInfo(): array
    {
        return [
            'type' => 'AMOLED Screen',
        ];
    }

    public function hasMiniJack(): bool
    {
        return true;
    }
}
