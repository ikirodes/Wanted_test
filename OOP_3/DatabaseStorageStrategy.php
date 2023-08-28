<?php

class DatabaseStorageStrategy implements KeyStorageStrategy {
    private $dbConnection;

    public function __construct($dbConnection) {
        $this->dbConnection = $dbConnection;
    }

    public function saveKey($key) {
        //
    }

    public function getKey() {
        //
    }
}