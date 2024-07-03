<?php 

namespace src\App;

class MayoDecorator extends BurgerDecorator {
    public function __construct(Burger $burger) {
        parent::__construct($burger);
    }

    public function prepare() {
        parent::prepare();
        echo "Adding Mayo\n";
    }

    public function cook() {
        parent::cook();
    }

    public function box() {
        parent::box();
    }
}