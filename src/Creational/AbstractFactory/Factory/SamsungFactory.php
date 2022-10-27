<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\SamsungLaptop;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\SamsungPhone;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\SamsungTV;

final class SamsungFactory implements Factory
{
    public function createPhone(): Interface\Phone
    {
        return new SamsungPhone();
    }

    public function createTV(): Interface\TV
    {
        return new SamsungTV();
    }

    public function createLaptop(): Interface\Laptop
    {
        return new SamsungLaptop();
    }
}
