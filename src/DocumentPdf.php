<?php 

namespace src\App;

class DocumentPdf implements Document {

    public function __construct() {
        echo 'Creating PDF document';
    }
    
    public function open() {
        return 'Opening PDF document';
    }

    public function save() {
        return 'Saving PDF document';
    }

    public function close() {
        return 'Closing PDF document';
    }

    public function destroy() {
        return 'Destroying PDF document';
    }

    public function export() {
        return 'Exporting PDF document';
    }
}