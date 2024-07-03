<?php 

namespace src\App;

interface Burger {
    public function prepare();
    public function cook();
    public function box();
}