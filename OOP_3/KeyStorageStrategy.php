<?php

interface KeyStorageStrategy {
    public function saveKey($key);
    public function getKey();
}