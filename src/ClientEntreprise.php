<?php

namespace src\App;


class ClientEntreprise implements Client {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function notify($status)
    {
        if ($status) {
            echo 'L\'entreprise ' . $this->name . ' a reçu une notification : la promotion ' . $status.PHP_EOL;
        } else {
            echo 'L\'entreprise ' . $this->name . ' a reçu une notification : la promotion ' . $status.PHP_EOL;
        }
    }

}