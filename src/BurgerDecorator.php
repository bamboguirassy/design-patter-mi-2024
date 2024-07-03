<?php

namespace src\App;

class BurgerDecorator implements Burger {
    protected $burger;

    public function __construct(Burger $burger) {
        $this->burger = $burger;
    }

    public function prepare() {
        $this->burger->prepare();
    }

    public function cook() {
        $this->burger->cook();
    }

    public function box() {
        $this->burger->box();
    }
}