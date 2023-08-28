<?php

require_once 'ObjectHandler.php';

class Object1Handler implements ObjectHandler {
    public function handle(SomeObject $object): string {
        return 'Handling object_1';
    }
}