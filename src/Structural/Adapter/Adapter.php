<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Structural\Adapter;

class Adapter implements AdapterInterface
{
    public function __construct(protected Service $service)
    {
    }

    public function read(): string
    {
        $this->service->runReadCommand();

        return 'success';
    }

    public function write(string $string): void
    {
        $this->service->runWriteCommand($string);
    }

    public function publish(): void
    {
        $this->service->publishing();
    }
}
