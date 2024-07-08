<?php
namespace Builder;

class Pizzeria {
    private $builder;
    public function __construct(PizzaBuilder $builder) {
        $this->builder = $builder;
    }

    public function getPizza() {
        return $this->builder->getPizza();
    }

    // public function build() {
    //     $this->builder->creerPizza();
    //     $this->builder->addGarnitures();
    //     $this->builder->setTaille();
    //     $this->builder->addPate();
    //     $this->builder->addSauce();
    // }

    public function getBuilder() {
        $this->builder->creerPizza();
        return $this->builder;
    }
}