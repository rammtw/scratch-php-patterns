<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Laptop\XiaomiLaptop;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Phone\XiaomiPhone;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\TV\XiaomiTV;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

final class XiaomiFactory implements Factory
{
    public function createPhone(): Interface\Phone
    {
        return new XiaomiPhone();
    }

    public function createTV(): Interface\TV
    {
        return new XiaomiTV();
    }

    public function createLaptop(): Interface\Laptop
    {
        return new XiaomiLaptop();
    }
}
