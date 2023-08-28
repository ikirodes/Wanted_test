<?php

class KeyManager {
    private $keyStorage;

    public function setStorageStrategy(KeyStorageStrategy $strategy) {
        $this->keyStorage = $strategy;
    }

    public function saveKey($key) {
        $this->keyStorage->saveKey($key);
    }

    public function getKey() {
        return $this->keyStorage->getKey();
    }
}