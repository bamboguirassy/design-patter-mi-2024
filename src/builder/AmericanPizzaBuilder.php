<?php

namespace Builder;

class AmericanPizzaBuilder implements PizzaBuilder {
    
        private $pizza;
    
        public function creerPizza() {
            $this->pizza = new Pizza();
            echo 'Pizza américaine créée'.PHP_EOL;
        }
    
        public function setTaille() {
            $this->pizza->taille = 'grande';
            echo 'Taille définie'.PHP_EOL;
        }
    
        public function addGarnitures() {
            $this->pizza->garnitures = 'tomates, fromage, viande hachée';
            echo 'Garnitures ajoutées'.PHP_EOL;
        }
    
        public function addSauce() {
            $this->pizza->sauce = 'barbecue';
            echo 'Sauce ajoutée'.PHP_EOL;
        }
    
        public function addPate() {
            $this->pizza->pate = 'épaisse';
            echo 'Pâte ajoutée'.PHP_EOL;
        }
    
        public function getPizza() {
            echo 'Pizza américaine prête'.PHP_EOL;
            return $this->pizza;
        }
}