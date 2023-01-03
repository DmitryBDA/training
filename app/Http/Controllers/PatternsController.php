<?php

namespace App\Http\Controllers;

use App\Patterns\ContainerProperty\Classes\BlogPost;
use App\Patterns\Delegation\Messenger;
use App\Patterns\EventChannel\Classes\EventChannel;
use App\Patterns\EventChannel\Classes\Publisher;
use App\Patterns\EventChannel\Classes\Subscriber;

class PatternsController extends Controller
{
    public function containerProperty(): string
    {
        $blogPost = new BlogPost('title', 'desc');
        $blogPost->addProperty('new_property', 'value new property');
        \Debugbar::info($blogPost);
        \Debugbar::info($blogPost->getProperty('new_property'));

        return 'pattern containerProperty';
    }

    public function delegation(): string
    {
        $messenger = new Messenger();

        $messenger
            ->setSender('sender@mail.ru')
            ->setRecipient('recipient@mail.ru')
            ->setMessage('message by email')
            ->send();

        \Debugbar::info($messenger);

        $messenger->toSms()
            ->setSender('+79149098288')
            ->setRecipient('+79836514258')
            ->setMessage('message by sms')
            ->send();

        \Debugbar::info($messenger);

        return 'pattern delegation';
    }

    public function eventChannel(): string
    {
        $eventChannel = new EventChannel();

        $bananaNews = new Publisher('banana', $eventChannel);
        $tomatoNews = new Publisher('tomato', $eventChannel);

        $sansa = new Subscriber('Sansa Stark');
        $snow = new Subscriber('Jon Snow');

        $eventChannel->subscribe('banana', $sansa);
        $eventChannel->subscribe('tomato', $snow);

        /**
         * Поставщики публикуют данные, и происходит уведомление всех кто подписан на данные темы
         */
        $bananaNews->publish('Пришли 30 коробок бананов');
        $tomatoNews->publish('Свежие помидоры');


        return 'pattern eventChannel';
    }
}
