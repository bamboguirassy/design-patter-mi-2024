<?php
namespace Builder;

interface PizzaBuilder {

    public function creerPizza();

    public function setTaille();

    public function addGarnitures();

    public function addSauce();

    public function addPate();

    public function getPizza();

}