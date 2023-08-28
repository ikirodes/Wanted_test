<?php

$keyManager = new KeyManager();

$keyManager->setStorageStrategy(new FileStorageStrategy('secret_key.txt'));

$keyManager->saveKey('my_secret_key');

$secretKey = $keyManager->getKey();