<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\Prototype;

class Prototype
{
    public Component $component;
    public int $someScalar;

    public function __clone(): void
    {
        $this->component = clone $this->component;
    }
}
