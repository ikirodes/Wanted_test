<?php

class FileStorageStrategy implements KeyStorageStrategy {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    public function saveKey($key) {
        file_put_contents($this->filePath, $key);
    }

    public function getKey() {
        return file_get_contents($this->filePath);
    }
}