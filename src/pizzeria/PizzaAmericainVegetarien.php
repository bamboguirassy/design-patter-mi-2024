<?php

namespace src\Pizzeria;

class PizzaAmericainVegetarien extends Pizza{

    public function __construct() {
        $this->nom = "Pizza Americain Vegetarien";
        $this->ingredients = ["Sauce tomate", "Mozzarella", "Olives", "Champignons", "Poivrons"];
    }

    public function prepare() {
        echo "Préparation de la pizza Americain Vegetarien\n";
    }

    public function ajouterIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function empequeter() {
        echo "Empequetage de la pizza Americain Vegetarien\n";
    }

    public function afficher() {
        echo "Pizza Americain Vegetarien avec les ingrédients suivants: ";
        foreach ($this->ingredients as $ingredient) {
            echo $ingredient . " ";
        }
        echo "\n";
    }
    
}