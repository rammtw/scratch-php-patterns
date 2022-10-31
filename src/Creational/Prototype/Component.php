<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\Prototype;

class Component
{
    private string $value;

    private string $message;

    public function __construct(string $value, string $message)
    {
        $this->value = $value;
        $this->message = $message;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
