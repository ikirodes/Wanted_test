<?php

require_once 'ObjectHandlerFactory.php';
require_once 'SomeObject.php';

class SomeObjectsHandler {
    public function __construct() { }

    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
            $handler = ObjectHandlerFactory::createHandler($object);

            $handlers[] = $handler->handle($object);
        }

        return $handlers;
    }
}