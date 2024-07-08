<?php

namespace src\Pizzeria;


class PizerriaBuilder
{

    public ?UsineFactory $usineFactory;

    public function __construct(UsineFactory $usineFactory)
    {
        $this->usineFactory = $usineFactory;
    }
    public function createPizzaVegetarien()
    {
        return $this->usineFactory->createPizzaVegetarien();
    }

    public function createPizzaPeperoni()
    {
        return $this->usineFactory->createPizzaPeperoni();
    }
}
