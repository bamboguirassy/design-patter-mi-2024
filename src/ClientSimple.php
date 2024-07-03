<?php

namespace src\App;

class ClientSimple implements Client {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($status)
    {
        if ($status) {
            echo 'Le client ' . $this->name . ' a reçu une notification : la promotion ' . $status.PHP_EOL;
        } else {
            echo 'Le client ' . $this->name . ' a reçu une notification : la promotion ' . $status.PHP_EOL;
        }
    }
    
}