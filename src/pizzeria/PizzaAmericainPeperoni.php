<?php

namespace src\Pizzeria;

class PizzaAmericainPeperoni extends Pizza {

    public function __construct() {
        $this->nom = "Pizza Americain Peperoni";
        $this->ingredients = ["Sauce tomate", "Mozzarella", "Peperoni"];
    }

    public function prepare() {
        echo "Préparation de la pizza Americain Peperoni\n";
    }

    public function ajouterIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function empequeter() {
        echo "Empequetage de la pizza Americain Peperoni\n";
    }

    public function afficher() {
        echo "Pizza Americain Peperoni avec les ingrédients suivants: ".PHP_EOL;
        foreach ($this->ingredients as $ingredient) {
            echo "-". $ingredient . " ".PHP_EOL;
        }
        echo "\n";
    }
    
} 