<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Factories\ModerFactory;
use App\Patterns\AbstractFactory\Factories\VictorianFactory;
use App\Patterns\AbstractFactory\Interfaces\iFurniture;

class SwitchFactory
{
    public function getFactory($type): iFurniture
    {
        switch ($type) {
            case 'modern':
                $factory = new ModerFactory();
                break;
            case 'victorian':
                $factory = new VictorianFactory();
                break;
            default:
                throw new \Exception('Неизвестный тип фабрики');
        }

        return $factory;
    }
}
