<?php

namespace src\photos;

abstract class PhotoDecorator implements Photo {
    protected $photo;

    public function __construct(Photo $photo) {
        $this->photo = $photo;
    }

    public function display() {
        $this->photo->display();
    }
}
