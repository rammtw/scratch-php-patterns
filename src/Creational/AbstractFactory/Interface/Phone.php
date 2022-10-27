<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

interface Phone
{
    public function getOs(): string;
    public function call(): void;
}
