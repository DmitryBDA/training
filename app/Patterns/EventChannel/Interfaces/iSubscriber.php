<?php

namespace App\Patterns\EventChannel\Interfaces;

interface iSubscriber
{
    /**
     * Уведомление подписчика
     */
    public function notify($data);
}
