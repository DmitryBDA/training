<?php

namespace App\Patterns\Delegation\Interfaces;

interface iMessenger
{
    public function setSender($sender): iMessenger;

    public function setRecipient($recipient): iMessenger;

    public function setMessage($message): iMessenger;

    public function send(): bool;

}
