<?php
use src\App\BaseBurger;
use src\App\CheeseDecorator;
use src\App\MayoDecorator;
use src\App\SteakDecorator;

require 'vendor/autoload.php';








$baseBurger = new BaseBurger();

$baseBurger = new CheeseDecorator($baseBurger);
$baseBurger = new CheeseDecorator($baseBurger);
$baseBurger = new SteakDecorator($baseBurger);
$baseBurger = new MayoDecorator($baseBurger);


$baseBurger->prepare();

$baseBurger->cook();

$baseBurger->box();

