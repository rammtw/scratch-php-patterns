<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\Singleton;

final class Singleton
{
    private static Singleton|null $instance = null;

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public static function getInstance(): self
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
