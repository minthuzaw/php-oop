<?php

interface mailService
{
    public function send();
}

class useGmail implements mailService
{
    public function send()
    {
        echo "Sending using gmail...\n";
    }
}

class useHotmail implements mailService
{
    public function send()
    {
        echo "Sending using hotmail...\n";
    }
}

class Client
{
    protected mailService $service;

    public function __construct(mailService $service)
    {
        $this->service = $service;
    }
    public function submit(): void
    {
        $this->service->send();
    }
}

$client = new Client(new useGmail);
$client->submit();

$client = new Client(new useHotmail);
$client->submit();
