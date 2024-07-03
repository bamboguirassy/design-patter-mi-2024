<?php

namespace src\photos;

class SepiaFilter extends PhotoDecorator {
    public function display() {
        parent::display();
        $this->addSepia();
    }

    private function addSepia() {
        echo "Application du filtre sépia.\n";
    }
}