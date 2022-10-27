<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory;
use Ramil\ScratchPhpPatterns\Creational\AbstractFactory;
use Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Parser;

class App
{
    public function run(): string
    {
        $this->factoryMethodRun();

        return '';
    }

    /**
     * Паттерн абстрактный метод
     *
     * @return void
     */
    private function factoryMethodRun(): void
    {
        $type = ['coin', 'feed'];
        $index = array_rand($type);

        $parser = match ($type[$index]) {
            'coin' => new Parser\CoinParser(),
            'feed' => new Parser\FeedParser(),
        };

        $parser->process();
    }

    private function abstractFactoryRun(): void
    {
        $factory = match ('apple') {
            'apple' => new Factory\AppleFactory(),
            'xiaomi' => new XiaomiFactory(),
            'samsung' => new SamsungFactory(),
        };

        $factory->createPhone();
        $factory->createTV();
        $factory->createLaptop();
    }
}
