<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Structural\Adapter;

interface AdapterInterface
{
    public function read(): string;
    public function write(string $string): void;
    public function publish(): void;
}