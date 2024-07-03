<?php

namespace src\photos;

class BlackAndWhiteFilter extends PhotoDecorator {
    public function display() {
        parent::display();
        $this->addBlackAndWhite();
    }

    private function addBlackAndWhite() {
        echo "Application du filtre noir et blanc.\n";
    }
}