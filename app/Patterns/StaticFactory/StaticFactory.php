<?php

namespace App\Patterns\StaticFactory;

use App\Patterns\Delegation\Classes\AbstractMessenger;
use App\Patterns\Delegation\Classes\EmailMessenger;
use App\Patterns\Delegation\Classes\SmsMessenger;

class StaticFactory
{
    public static function build($type)
    {
        switch ($type) {
            case 'sms':
                $messenger = new SmsMessenger();
                $messenger
                    ->setSender('+79149098288')
                    ->setRecipient('+79836514258')
                    ->setMessage('message by sms');
                break;
            case 'email':
                $messenger = new EmailMessenger();
                $messenger
                    ->setSender('sender@mail.ru')
                    ->setRecipient('recipient@mail.ru')
                    ->setMessage('message by email');
                break;
            default:
                throw new \Exception('Неизвестный тип объекта');
        }

        return $messenger;
    }
}
