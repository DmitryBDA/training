<?php

namespace App\Patterns\EventChannel\Interfaces;

interface iEventChannel
{
    /**
     * Поставщик говорит что по теме $topic будут рассылаться данные $data
     */
    public function publish($topic, $data);

    /**
     * Подписчик говорит что по теме $topic я ($subscriber) хочу получать данные
     */
    public function subscribe($topic, iSubscriber $subscriber);
}
