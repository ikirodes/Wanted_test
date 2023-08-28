<?php

interface HttpService {
    public function request(string $url, string $method, array $options);
}