<?php

namespace App\Patterns\Adapter\Interfaces;

interface iNotification
{
    public function send(string $message);
}
