<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

interface Factory
{
    public function createPhone(): Interface\Phone;
    public function createTV(): Interface\TV;
    public function createLaptop(): Interface\Laptop;
}
