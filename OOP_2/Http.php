<?php

class Http {
    private $service;

    public function __construct(HttpService $httpService) {
        $this->service = $httpService;
    }

    public function get(string $url, array $options) {
        $this->service->request($url, 'GET', $options);
    }

    public function post(string $url) {
        $this->service->request($url, 'POST');
    }
}