<?php

namespace App\Patterns\Adapter\Classes;

use App\Patterns\Adapter\Interfaces\iNotification;

class OtherEmailNotification
{
    public function sendMessage(string $message): void
    {
        \Debugbar::info(__CLASS__ . ' ' . __METHOD__ . ' ' . $message);
    }
}
