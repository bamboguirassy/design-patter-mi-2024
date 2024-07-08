<?php
require 'vendor/autoload.php';

use Builder\AmericanPizzaBuilder;
use Builder\ItalianPizzaBuilder;
use Builder\Pizzeria;


$italianPizzaBuilder = new ItalianPizzaBuilder();
$pizzeria = new Pizzeria($italianPizzaBuilder);
$pizzaBuilder = $pizzeria->getBuilder();
// faire fonctionner le builder avec les méthodes de la classe enchainées
$pizza = $pizzaBuilder->addGarnitures()->setTaille()->addPate()
->addPate()->addSauce()->getPizza();

echo $pizza.PHP_EOL;





