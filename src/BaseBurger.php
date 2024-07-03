<?php 

namespace src\App;

class BaseBurger implements Burger {
    public function prepare() {
        echo "Preparing the base burger\n";
    }

    public function cook() {
        echo "Cooking the base burger\n";
    }

    public function box() {
        echo "Boxing the base burger\n";
    }
}