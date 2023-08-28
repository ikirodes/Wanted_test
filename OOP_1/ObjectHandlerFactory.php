<?php

require_once 'Object1Handler.php';
require_once 'Object2Handler.php';

class ObjectHandlerFactory {
    public static function createHandler(SomeObject $object): ObjectHandler {
        $objectType = $object->getObjectName();

        switch ($objectType) {
            case 'object_1':
                return new Object1Handler();
            case 'object_2':
                return new Object2Handler();
            default:
                throw new \InvalidArgumentException('Unsupported type');
        }
    }
}