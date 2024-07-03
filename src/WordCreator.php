<?php 

namespace src\App;

class WordCreator implements DocumentCreator {
    public function createDocument() {
        return new DocumentWord();
    }
}