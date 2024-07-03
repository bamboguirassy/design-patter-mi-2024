<?php

namespace src\App;
class DatabaseConnexionSingleton {

    private static $instance;

    private function __construct()
    {
        
    }

    public static function getInstance() {
        if(DatabaseConnexionSingleton::$instance==null) {
            DatabaseConnexionSingleton::$instance = new DatabaseConnexionSingleton();
        }
        return DatabaseConnexionSingleton::$instance;
    }
    
}