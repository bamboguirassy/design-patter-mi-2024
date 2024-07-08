<?php

namespace src\Pizzeria;

class PizzaItalienPeperoni extends Pizza{

    public function __construct() {
        $this->nom = "Pizza Italien Peperoni";
        $this->ingredients = ["Sauce tomate", "Mozzarella", "Peperoni"];
    }

    public function prepare() {
        echo "Préparation de la pizza Italien Peperoni\n";
    }

    public function ajouterIngredient($ingredient) {
        $this->ingredients[] = $ingredient;
    }

    public function empequeter() {
        echo "Empequetage de la pizza Italien Peperoni\n";
    }

    public function afficher() {
        echo "Pizza Italien Peperoni avec les ingrédients suivants: ";
        foreach ($this->ingredients as $ingredient) {
            echo $ingredient . " ";
        }
        echo "\n";
    }

}