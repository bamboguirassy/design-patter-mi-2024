<?php 

namespace  src\App;


class ExcelCreator implements DocumentCreator {
    public function createDocument() {
        return new DocumentExcel();
    }

    
}