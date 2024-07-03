<?php 

namespace src\App;

interface Document {
    
    public function open();

    public function save();

    public function close();

    public function destroy();
}