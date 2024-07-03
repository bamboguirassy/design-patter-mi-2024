<?php

namespace src\App;

class SteakDecorator extends BurgerDecorator {
    public function __construct(Burger $burger) {
        parent::__construct($burger);
    }
    public function prepare() {
        parent::prepare();
        echo "Adding steak to the burger\n";
    }

    public function cook() {
        parent::cook();
    }

    public function box() {
        parent::box();
    }
}