<?php

namespace src\Pizzeria;

abstract class Pizza {

    public $nom;
    public $ingredients = [];

    public abstract function prepare();

    public abstract function ajouterIngredient($ingredient);

    public abstract function empequeter();

    public abstract function afficher();


    
}