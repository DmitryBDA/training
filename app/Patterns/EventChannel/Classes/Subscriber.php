<?php

namespace App\Patterns\EventChannel\Classes;

use App\Patterns\EventChannel\Interfaces\iSubscriber;

class Subscriber implements iSubscriber
{
    private string $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function notify($data)
    {
        $msg = "{$this->name} оповещен(а) данными $data";
        \Debugbar::info($msg);
    }
}
