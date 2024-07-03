<?php

namespace src\App;

use src\App\Document;

class DocumentExcel implements Document {

    public function __construct()
    {
        echo "Creating Excel document\n";
    }
        
        public function open() {
            echo "Opening Excel document\n";
        }
    
        public function save() {
            echo "Saving Excel document\n";
        }
    
        public function close() {
            echo "Closing Excel document\n";
        }
    
        public function destroy() {
            echo "Destroying Excel document\n";
        }
}