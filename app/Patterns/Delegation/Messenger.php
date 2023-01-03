<?php

namespace App\Patterns\Delegation;

use App\Patterns\Delegation\Classes\EmailMessenger;
use App\Patterns\Delegation\Classes\SmsMessenger;
use App\Patterns\Delegation\Interfaces\iMessenger;

class Messenger implements iMessenger
{
    private iMessenger $messenger;

    /**
     * @param iMessenger $messenger
     */
    public function __construct()
    {
        $this->messenger = $this->toEmail();
    }


    public function setSender($sender): iMessenger
    {
        $this->messenger->setSender($sender);

        return $this->messenger;
    }

    public function setRecipient($recipient): iMessenger
    {
        $this->messenger->setRecipient($recipient);

        return $this->messenger;
    }

    public function setMessage($message): iMessenger
    {
        $this->messenger->setMessage($message);

        return $this->messenger;
    }

    public function send(): bool
    {
        return $this->messenger->send();
    }

    public function toEmail(): iMessenger
    {
        $this->messenger = new EmailMessenger();

        return $this->messenger;
    }

    public function toSms(): iMessenger
    {
        $this->messenger = new SmsMessenger();

        return $this;
    }
}
