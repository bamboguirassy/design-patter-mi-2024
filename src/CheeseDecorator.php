<?php

namespace src\App;

class CheeseDecorator extends BurgerDecorator {

    public function __construct(Burger $burger) {
        parent::__construct($burger);
    }

    public function prepare() {
        parent::prepare();
        echo 'Adding Cheese...'.PHP_EOL;
    }
}