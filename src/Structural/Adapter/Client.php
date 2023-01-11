<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Structural\Adapter;

class Client
{
    public function run(AdapterInterface $adapter): void
    {
        $adapter->read();
        $adapter->write('some text');
        $adapter->publish();
    }
}