<?php

namespace src\Pizzeria;

interface UsineFactory {
    public function createPizzaVegetarien();
    public function createPizzaPeperoni();
}