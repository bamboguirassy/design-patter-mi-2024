<?php 

namespace src\Pizzeria;

class ItalianFactory implements UsineFactory {

    public function createPizzaVegetarien() {
        return new PizzaItalienVegetarien();
    }

    public function createPizzaPeperoni() {
        return new PizzaItalienPeperoni();
    }
    
}