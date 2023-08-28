<?php

require_once 'ObjectHandler.php';

class Object2Handler implements ObjectHandler {
    public function handle(SomeObject $object): string {
        return 'Handling object_2';
    }
}