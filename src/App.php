<?php

declare(strict_types=1);

namespace Ramil\ScratchPhpPatterns;

use Ramil\ScratchPhpPatterns\Creational\AbstractFactory\Factory;
use Ramil\ScratchPhpPatterns\Creational\Builder;
use Ramil\ScratchPhpPatterns\Creational\FactoryMethod\Parser;
use Ramil\ScratchPhpPatterns\Creational\Prototype;
use Ramil\ScratchPhpPatterns\Creational\Singleton\Singleton;
use Ramil\ScratchPhpPatterns\Structural\Adapter\Adapter;
use Ramil\ScratchPhpPatterns\Structural\Adapter\Client;
use Ramil\ScratchPhpPatterns\Structural\Adapter\Service;

class App
{
    public function run(): void
    {
//        $this->factoryMethodRun();
//        $this->abstractFactoryRun();
//        $this->builderRun();
//        $this->prototypeRun();
//        $this->singletonRun();
        $this->adapterRun();
    }

    /**
     * Абстрактный метод
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

    /**
     * Абстрактная фабрика
     *
     * @return void
     */
    private function abstractFactoryRun(): void
    {
        $factory = match ('apple') {
            'apple' => new Factory\AppleFactory(),
            'xiaomi' => new Factory\XiaomiFactory(),
            'samsung' => new Factory\SamsungFactory(),
        };

        $phone = $factory->createPhone();
        $tv = $factory->createTV();
        $laptop = $factory->createLaptop();

        $phone->call();
        dump($tv->getInch());
        dump($laptop->hasMiniJack());
    }

    /**
     * Строитель
     *
     * @return void
     */
    private function builderRun(): void
    {
        $builder = new Builder\Director();
        $resume = $builder->constructResume(new Builder\ResumeBuilder());
        dump($resume);
    }

    /**
     * Прототип
     *
     * @return void
     */
    private function prototypeRun(): void
    {
        $prototype = new Prototype\Prototype();
        $prototype->component = new Prototype\Component('some_value', 'The message.');
        $prototype->someScalar = 245;

        $clonedPrototype = clone $prototype;
        $clonedPrototype->component = new Prototype\Component('cloned_some_value', 'The cloned message.');
        $clonedPrototype->someScalar = 415;

        dump($prototype, $clonedPrototype);
    }

    /**
     * Одиночка
     *
     * @return void
     */
    private function singletonRun(): void
    {
        $object = Singleton::getInstance();
        $object2 = Singleton::getInstance();

        if ($object === $object2) {
            echo 'Singleton works';
        } else {
            echo 'Singleton failed';
        }
    }

    private function adapterRun(): void
    {
        $client = new Client();

        $client->run(new Adapter(new Service()));
    }
}
