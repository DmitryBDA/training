<?php

namespace App\Patterns\EventChannel\Classes;

use App\Patterns\EventChannel\Interfaces\iEventChannel;
use App\Patterns\EventChannel\Interfaces\iPublisher;

class Publisher implements iPublisher
{
    private string $topic;

    private iEventChannel $eventChannel;

    /**
     * @param string $topic
     * @param iEventChannel $eventChannel
     */
    public function __construct(string $topic, iEventChannel $eventChannel)
    {
        $this->topic = $topic;
        $this->eventChannel = $eventChannel;
    }


    public function publish(string $data)
    {
        $this->eventChannel->publish($this->topic, $data);
    }
}
