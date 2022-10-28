<?php

namespace Ramil\ScratchPhpPatterns\Creational\Builder;

class Director
{
    public function constructResume(ResumeBuilderInterface $builder): object
    {
        $builder->setFirstName('Ramil');
        $builder->setLastName('Sagitov');
        $builder->setAge(28);
        $builder->setCity('Antalya');
        $builder->setPhone('+90 (555) 444 90-45');
        $builder->setDescription('Great developer and just a good person!');
        return $builder->getResult();
    }
}