<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\TV;

final class XiaomiTV implements TV
{
    public function getInch(): float
    {
        return 19;
    }

    public function power(): void
    {
        echo "CALL " . __METHOD__ . " OF "  . __CLASS__;
    }
}
