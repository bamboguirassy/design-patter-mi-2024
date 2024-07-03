<?php 

namespace src\App;

class DocumentWord implements Document {

    public function __construct()
    {
        echo 'Creating Word document';
    }
    
    public function open() {
        return 'Opening Word document';
    }

    public function save() {
        return 'Saving Word document';
    }

    public function close() {
        return 'Closing Word document';
    }

    public function destroy() {
        return 'Destroying Word document';
    }

    // methodes propre à Word
    public function write() {
        return 'Writing Word document';
    }
}