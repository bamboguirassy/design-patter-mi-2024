<?php

namespace src\Pizzeria;

class PizzaItalienVegetarien extends Pizza {

    public function __construct() {
        $this->nom = "Pizza Italien Vegetarien";
        $this->ingredients = ["Sauce tomate", "Mozzarella", "Olives", "Champignons", "Poivrons"];
    }

    public function prepare() {
        echo "Préparation de la pizza Italien Vegetarien\n";
    }

    public function ajouterIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function empequeter() {
        echo "Empequetage de la pizza Italien Vegetarien\n";
    }

    public function afficher() {
        echo "Pizza Italien Vegetarien avec les ingrédients suivants: ";
        foreach ($this->ingredients as $ingredient) {
            echo $ingredient . " ";
        }
        echo "\n";
    }
    
}