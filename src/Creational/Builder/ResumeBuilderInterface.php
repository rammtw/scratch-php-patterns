<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns\Creational\Builder;

interface ResumeBuilderInterface
{
    public function reset(): void;
    public function setFirstName(string $firstName): void;
    public function setLastName(string $lastName): void;
    public function setAge(int $age): void;
    public function setCity(string $city): void;
    public function setSalary(string $salary): void;
    public function setPhone(string $phone): void;
    public function setDescription(string $description): void;
    public function getResult(): object;
}
