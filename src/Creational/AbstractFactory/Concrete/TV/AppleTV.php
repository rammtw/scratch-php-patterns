<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Concrete\TV;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Interface\TV;

final class AppleTV implements TV
{
    public function getInch(): float
    {
        return 24.4;
    }

    public function power(): void
    {
        echo "CALL " . __METHOD__ . " OF "  . __CLASS__;
    }
}
