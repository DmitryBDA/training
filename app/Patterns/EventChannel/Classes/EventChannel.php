<?php

namespace App\Patterns\EventChannel\Classes;

use App\Patterns\EventChannel\Interfaces\iEventChannel;
use App\Patterns\EventChannel\Interfaces\iSubscriber;

class EventChannel implements iEventChannel
{
    private array $topics = [];

    /**
     * Поставщик публикует данные $data по теме $topic
     *  и всем кто подписан ($subscriber) на эту тему отправляются уведомления с данными
     */
    public function publish($topic, $data)
    {
        if (empty($this->topics[$topic])) {
            return;
        }

        foreach ($this->topics[$topic] as $subscriber) {
            /** @var iSubscriber $subscriber */
            $subscriber->notify($data);
        }
    }

    public function subscribe($topic, iSubscriber $subscriber)
    {
        $this->topics[$topic][] = $subscriber;
    }
}
