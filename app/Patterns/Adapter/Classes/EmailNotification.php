<?php

namespace App\Patterns\Adapter\Classes;

use App\Patterns\Adapter\Interfaces\iNotification;

class EmailNotification implements iNotification
{

    public function send(string $message)
    {
        \Debugbar::info(__CLASS__ . ' ' . __METHOD__ . ' ' . $message);
    }
}
