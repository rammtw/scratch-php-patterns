<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Structural\Adapter;

class Service
{
    public function runWriteCommand(string $text): bool
    {
        return false;
    }

    public function runReadCommand(): bool
    {
        return true;
    }

    public function publishing(): bool
    {
        return true;
    }
}