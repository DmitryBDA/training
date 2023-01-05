<?php

namespace App\Patterns\Adapter\Classes;

use App\Patterns\Adapter\Interfaces\iNotification;

class OtherEmailNotificationAdapter implements iNotification
{
    private $objectAdaptee;

    /**
     * @param OtherEmailNotification $objectAdaptee
     */
    public function __construct(OtherEmailNotification $objectAdaptee)
    {
        $this->objectAdaptee = $objectAdaptee;
    }

    public function send(string $message)
    {
        $this->objectAdaptee->sendMessage($message);
    }
}
