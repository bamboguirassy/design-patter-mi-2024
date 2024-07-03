<?php 

namespace src\App;

class PdfCreator implements DocumentCreator {

    public function createDocument() {
        return new DocumentPdf();
    }

    
}