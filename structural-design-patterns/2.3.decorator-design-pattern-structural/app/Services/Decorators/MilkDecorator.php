<?php

namespace App\Services\Decorators;
use App\Services\Decorators\CoffeeDecorator;

class MilkDecorator extends CoffeeDecorator
{
    public function getCost(): int
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . ", Milk";
    }
}
