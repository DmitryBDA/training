<?php

namespace App\Patterns\Delegation\Classes;

use App\Patterns\Delegation\Interfaces\iMessenger;

abstract class AbstractMessenger implements iMessenger
{
    protected string $sender;
    protected string $recipient;

    protected string $message;

    public function setSender($sender): iMessenger
    {
        $this->sender = $sender;
        return $this;
    }

    public function setRecipient($recipient): iMessenger
    {
        $this->recipient = $recipient;
        return $this;
    }

    public function setMessage($message): iMessenger
    {
        $this->message = $message;
        return $this;
    }

    public function send(): bool
    {
        return true;
    }
}
