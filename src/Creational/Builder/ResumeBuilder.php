<?php

namespace Ramil\ScratchPhpPatterns\Creational\Builder;

class ResumeBuilder implements ResumeBuilderInterface
{
    private object $resume;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->resume = new \stdClass();
    }

    public function setFirstName(string $firstName): void
    {
        $this->resume->name = $firstName;
    }

    public function setLastName(string $lastName): void
    {
        $this->resume->lastName = $lastName;
    }

    public function setAge(int $age): void
    {
        $this->resume->age = $age;
    }

    public function setCity(string $city): void
    {
        $this->resume->city = $city;
    }

    public function setSalary(string $salary): void
    {
        $this->resume->salary = $salary;
    }

    public function setPhone(string $phone): void
    {
        $this->resume->phone = $phone;
    }

    public function setDescription(string $description): void
    {
        $this->resume->description = $description;
    }

    public function getResult(): object
    {
        return $this->resume;
    }
}