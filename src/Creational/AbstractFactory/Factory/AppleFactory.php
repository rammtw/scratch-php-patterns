<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Laptop\AppleLaptop;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\Phone\ApplePhone;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\TV\AppleTV;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface;

final class AppleFactory implements Factory
{
    public function createPhone(): Interface\Phone
    {
        return new ApplePhone();
    }

    public function createTV(): Interface\TV
    {
        return new AppleTV();
    }

    public function createLaptop(): Interface\Laptop
    {
        return new AppleLaptop();
    }
}
