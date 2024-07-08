<?php 

namespace src\Pizzeria;

class AmericanFactory implements UsineFactory {

    public function createPizzaVegetarien() {
        return new PizzaAmericainVegetarien();
    }

    public function createPizzaPeperoni() {
        return new PizzaAmericainPeperoni();
    }

}