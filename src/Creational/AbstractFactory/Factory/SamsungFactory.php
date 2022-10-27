<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Laptop\SamsungLaptop;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Phone\SamsungPhone;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\TV\SamsungTV;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

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
