<?php
namespace Builder;

class ItalianPizzaBuilder implements PizzaBuilder {

    private $pizza;

    public function creerPizza() {
        $this->pizza = new Pizza();
        echo 'Pizza italienne créée'.PHP_EOL;
        return $this;
    }

    public function setTaille() {
        $this->pizza->taille = 'petite';
        echo 'Taille définie'.PHP_EOL;
        return $this;
    }

    public function addGarnitures() {
        $this->pizza->garnitures = 'tomates, fromage, jambon';
        echo 'Garnitures ajoutées'.PHP_EOL;
        return $this;
    }

    public function addSauce() {
        $this->pizza->sauce = 'tomate';
        echo 'Sauce ajoutée'.PHP_EOL;
        return $this;
    }

    public function addPate() {
        $this->pizza->pate = 'fine';
        echo 'Pâte ajoutée'.PHP_EOL;
        return $this;
    }

    public function getPizza() {
        echo 'Pizza italienne prête'.PHP_EOL;
        return $this->pizza;
    }

}