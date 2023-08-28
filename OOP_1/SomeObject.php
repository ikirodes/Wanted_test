<?php

class SomeObject {
    protected $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getObjectName() {
        return $this->name;
    }
}