<?php

namespace src\App;

class Promotion
{
    private $opened = false;
    private $name = '';
    private $oberservateurs = [];

    public function __construct($name, $status)
    {
        $this->name = $name;
        $this->opened = $status;
    }

    public function open()
    {
        $this->opened = true;
        $this->notifyObservers();
    }

    public function close()
    {
        $this->opened = false;
        $this->notifyObservers();
    }



    public function addObserver(Client $observer)
    {
        $this->oberservateurs[] = $observer;
    }

    public function removeObserver(Client $observer)
    {
        $key = array_search($observer, $this->oberservateurs);
        if ($key !== false) {
            unset($this->oberservateurs[$key]);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->oberservateurs as $observer) {
            $observer->notify($this->opened);
        }
    }
}