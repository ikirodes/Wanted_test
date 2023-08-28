<?php

interface ObjectHandler {
    public function handle(SomeObject $object): string;
}