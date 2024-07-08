<?php

 namespace Builder;

 class Pizza {
    public $taille;
    public $garnitures;
    public $sauce;
    public $pate;

    public function __toString() {
        return 'Pizza : '.$this->taille.' '.$this->garnitures.' '.$this->sauce.' '.$this->pate.PHP_EOL;
    }
 }