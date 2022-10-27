<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

interface Laptop
{
    public function getMatrixInfo(): array;
    public function hasMiniJack(): bool;
}
